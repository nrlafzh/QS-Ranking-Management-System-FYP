<?php
session_start();
include('connection.php');

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Writer\Xls;
use PhpOffice\PhpSpreadsheet\Writer\Csv;

if (isset($_POST['save_excel_data'])) {
    $fileName = $_FILES['import_file']['name'];
    $file_ext = pathinfo($fileName, PATHINFO_EXTENSION);

    $allowed_ext = ['xls', 'csv', 'xlsx'];

    if (in_array($file_ext, $allowed_ext)) {
        $inputFileNamePath = $_FILES['import_file']['tmp_name'];
        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileNamePath);
        $data = $spreadsheet->getActiveSheet()->toArray();

        $count = 0;
        $importedData = array();
        foreach ($data as $row) {
            if ($count > 0) {
                $noStaff = $row['0'];
                $noKP = $row['1'];
                $namaStaff = $row['2'];
                $gelaran = $row['3'];
                $gred = $row['4'];
                $status = $row['5'];
                $jantina = $row['6'];
                $warganegara = $row['7'];
                $jawatan = $row['8'];
                $kelayakan = $row['9'];
                $taraf = $row['10'];
                $PTJ = $row['11'];

                // Check for duplicate data before inserting
                if (isDuplicateData($noStaff, $noKP, $namaStaff, $gelaran, $gred, $status, $jantina, $warganegara, $jawatan, $kelayakan, $taraf, $PTJ)) {
                    continue; // Skip duplicate entry
                }

                $query = " insert into staff (noStaff, noKP, namaStaff, gelaran, gred, status, jantina, warganegara, jawatan, kelayakan, taraf, PTJ) 
            values('$noStaff', '$noKP', '$namaStaff', '$gelaran', '$gred', '$status', '$jantina', '$warganegara', '$jawatan', '$kelayakan', '$taraf', '$PTJ')";
            $result = mysqli_query($conn, $query);
                $importedData[] = $row;
            } else {
                $count = 1;
            }
        }

        if (!empty($importedData)) {
            $_SESSION['message'] = "Successfully Imported";
            header("location:datarecord.php");
            exit(0);
        } else {
            $_SESSION['message'] = "No new data imported";
            header('Location: datamanagementpic.php');
            exit(0);
        }
    } else {
        $_SESSION['message'] = "Invalid File";
        header('Location: datamanagementpicinvalid.php');
        exit(0);
    }
}

function isDuplicateData($noStaff, $noKP, $namaStaff, $gelaran, $gred, $status, $jantina, $warganegara, $jawatan, $kelayakan, $taraf, $PTJ)
{
    global $conn; // Assuming you have a database connection available

    // Prepare the query to check for duplicate data
    $query = "SELECT COUNT(*) AS count FROM staff WHERE noStaff = '$noStaff' AND noKP ='$noKP' AND namaStaff = '$namaStaff' AND gelaran = '$gelaran' AND gred = '$gred' AND status = '$status' AND jantina = '$jantina' AND warganegara = '$warganegara' AND jawatan = '$jawatan' AND kelayakan = '$kelayakan' AND taraf = '$taraf' AND PTJ = '$PTJ'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $count = $row['count'];

        // If the count is greater than 0, it means a duplicate entry exists
        if ($count > 0) {
            return true; // Duplicate data found
        }
    }

    return false; // No duplicate data found
}

if (isset($_POST['export_excel_btn'])) {
    $file_ext_name = $_POST['export_file_type'];
    $fileName = "staff-sheet";

    $staff = "SELECT * FROM staff";
    $query_run = mysqli_query($conn, $staff);

    if (mysqli_num_rows($query_run) > 0) {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $sheet->setCellValue('A1', 'NO STAFF');
        $sheet->setCellValue('B1', 'NO KP');
        $sheet->setCellValue('C1', 'NAMA');
        $sheet->setCellValue('D1', 'GELARAN');
        $sheet->setCellValue('E1', 'GRED');
        $sheet->setCellValue('F1', 'STATUS');
        $sheet->setCellValue('G1', 'JANTINA');
        $sheet->setCellValue('H1', 'WARGANEGARA');
        $sheet->setCellValue('I1', 'JAWATAN');
        $sheet->setCellValue('J1', 'KELAYAKAN');
        $sheet->setCellValue('K1', 'TARAF');
        $sheet->setCellValue('L1', 'PTJ');


        $rowCount = 2; // Initialize rowCount variable here

        foreach ($query_run as $data) {
            $sheet->setCellValue('A' . $rowCount, $data['noStaff']);
            $sheet->setCellValue('B' . $rowCount, $data['noKP']);
            $sheet->setCellValue('C' . $rowCount, $data['namaStaff']);
            $sheet->setCellValue('D' . $rowCount, $data['gelaran']);
            $sheet->setCellValue('E' . $rowCount, $data['gred']);
            $sheet->setCellValue('F' . $rowCount, $data['status']);
            $sheet->setCellValue('G' . $rowCount, $data['jantina']);
            $sheet->setCellValue('H' . $rowCount, $data['warganegara']);
            $sheet->setCellValue('I' . $rowCount, $data['jawatan']);
            $sheet->setCellValue('J' . $rowCount, $data['kelayakan']);
            $sheet->setCellValue('K' . $rowCount, $data['taraf']);
            $sheet->setCellValue('L' . $rowCount, $data['PTJ']);
            $rowCount++;
        }

        $sheet->getStyle('A1:L1')->applyFromArray([
            'font' => [
                'bold' => true,
            ],
            'fill' => [
                'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                'startColor' => [
                    'rgb' => 'fdac19', // Soft grey background color
                ],
            ],
        ]);
        // Auto-adjust column widths
        foreach (range('A', 'L') as $column) {
            $sheet->getColumnDimension($column)->setAutoSize(true);
        }

        if ($file_ext_name == 'xlsx') {
            $writer = new Xlsx($spreadsheet);
            $final_filename = $fileName . '.xlsx';
        } elseif ($file_ext_name == 'xls') {
            $writer = new Xls($spreadsheet);
            $final_filename = $fileName . '.xls';
        } elseif ($file_ext_name == 'csv') {
            $writer = new Csv($spreadsheet);
            $final_filename = $fileName . '.csv';
        }

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attactment; filename="' . urlencode($final_filename) . '"');
        $writer->save('php://output');
    } else {
        $_SESSION['message'] = "No Record Found";
        header('Location: datarecord.php');
        exit(0);
    }
}
?>

?>