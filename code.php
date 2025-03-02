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
                $fullname = $row['0'];
                $email = $row['1'];
                $phone = $row['2'];
                $course = $row['3'];

                // Check for duplicate data before inserting
                if (isDuplicateData($fullname, $email, $phone, $course)) {
                    continue; // Skip duplicate entry
                }

                $studentQuery = "INSERT INTO students (fullname,email,phone,course) VALUES ('$fullname','$email','$phone','$course')";
                $result = mysqli_query($conn, $studentQuery);
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

function isDuplicateData($fullname, $email, $phone, $course)
{
    global $conn; // Assuming you have a database connection available

    // Prepare the query to check for duplicate data
    $query = "SELECT COUNT(*) AS count FROM students WHERE fullname = '$fullname' AND email = '$email' AND phone = '$phone' AND course = '$course'";
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

if(isset($_POST['export_excel_btn']))
{
    $file_ext_name = $_POST['export_file_type'];
    $fileName = "student-sheet";

    $student = "SELECT * FROM students";
    $query_run = mysqli_query($conn, $student);

    if(mysqli_num_rows($query_run) > 0)
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $sheet->setCellValue('A1', 'Full Name');
        $sheet->setCellValue('B1', 'Email');
        $sheet->setCellValue('C1', 'Phone');
        $sheet->setCellValue('D1', 'Course');

        $rowCount = 2;
        foreach($query_run as $data)
        {
            $sheet->setCellValue('A'.$rowCount, $data['fullname']);
            $sheet->setCellValue('B'.$rowCount, $data['email']);
            $sheet->setCellValue('C'.$rowCount, $data['phone']);
            $sheet->setCellValue('D'.$rowCount, $data['course']);
            $rowCount++;
        }

        if($file_ext_name == 'xlsx')
        {
            $writer = new Xlsx($spreadsheet);
            $final_filename = $fileName.'.xlsx';
        }
        elseif($file_ext_name == 'xls')
        {
            $writer = new Xls($spreadsheet);
            $final_filename = $fileName.'.xls';
        }
        elseif($file_ext_name == 'csv')
        {
            $writer = new Csv($spreadsheet);
            $final_filename = $fileName.'.csv';
        }

        // $writer->save($final_filename);
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attactment; filename="'.urlencode($final_filename).'"');
        $writer->save('php://output');

    }
    else
    {
        $_SESSION['message'] = "No Record Found";
        header('Location: datarecord.php');
        exit(0);
    }
}
?>

?>