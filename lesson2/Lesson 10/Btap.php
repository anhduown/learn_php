<?php
//2.Bài tập Tạo lớp Điểm 2D:
//Tạo một lớp Diem2D với các thuộc tính x và y.
//Tạo phương thức để tính khoảng cách từ điểm hiện tại tới một điểm khác.//
// khai báo lớp point2D
class Point2D {
    // Khai báo thuộc tính private $x và $y
    private $x;
    private $y;
    // Khai báo phương thức khởi tạo __construct, nhận giá trị xVal và yVal làm tham số
    public function __construct($xVal, $yVal) {
        $this->x = $xVal;
        $this->y = $yVal;
    }

    public function calculateDistance($otherPoint) {
        $dx = $this->x - $otherPoint->x;
        $dy = $this->y - $otherPoint->y;
        $distance = sqrt($dx * $dx + $dy * $dy);
        return $distance;
    }
}

// Create points
$point1 = new Point2D(1, 2);
$point2 = new Point2D(4, 6);

// Calculate distance between two points
$distance = $point1->calculateDistance($point2);
echo "Distance between two points: " . $distance;
?>
<?php
//Bai 3
//Bài tập Tạo lớp Mảng số nguyên:
//Tạo một lớp MangSoNguyen với thuộc tính là một mảng các số nguyên.
//Tạo các phương thức để tính tổng, trung bình, và phần tử lớn nhất của mảng.
class IntegerArray {
    private $array;

    public function __construct($array) {
        $this->array = $array;
    }

    public function calculateSum() {
        return array_sum($this->array);
    }

    public function calculateAverage() {
        $sum = $this->calculateSum();
        $count = count($this->array);
        return $sum / $count;
    }

    public function findMax() {
        return max($this->array);
    }
}
$array = [1,2,3,4];
$less3 = new IntegerArray($array);
echo "Total: ". $less3->calculateSum(). "<br />";
echo "Total: ". $less3->calculateAverage(). "<br />";
echo "Total: ". $less3->findMax();
echo "<br />";

//Bai 4
class Clock {
    private $hour;
    private $minute;
    private $second;

    public function __construct($hour, $minute, $second) {
        $this->hour = $hour;
        $this->minute = $minute;
        $this->second = $second;
    }

    public function displayTime() {
        $formattedTime = sprintf("%02d:%02d:%02d", $this->hour, $this->minute, $this->second);
        return $formattedTime;
    }

    public function increaseSecond() {
        $this->second++;
        if ($this->second >= 60) {
            $this->second = 0;
            $this->minute++;
            if ($this->minute >= 60) {
                $this->minute = 0;
                $this->hour++;
                if ($this->hour >= 24) {
                    $this->hour = 0;
                }
            }
        }
    }
}

$hour = 10;
$minute = 5;
$second = 15;
$less4 = new Clock($hour, $minute, $second);
echo "Time is: ". $less4->displayTime();
$less4->increaseSecond();
echo "<br />";
echo "Time after increase 1 second is: ". $less4->displayTime();
echo "<br />";

//Bai 5
class Student {
    private $studentId;
    private $fullName;

    public function __construct($studentId, $fullName) {
        $this->studentId = $studentId;
        $this->fullName = $fullName;
    }

    public function getStudentId() {
        return $this->studentId;
    }

    public function getFullName() {
        return $this->fullName;
    }
}

$studentId = 1;
$fullName = ("Nguyen Van A");
$less5 = new Student($studentId, $fullName);
echo "ID: ". $less5->getStudentId(). "/ Full name: ". $less5->getFullName(). "<br />";

//Bai 6
class Car {
    private $brand;
    private $color;
    private $year;

    public function __construct($brand, $color, $year) {
        $this->brand = $brand;
        $this->color = $color;
        $this->year = $year;
    }

    public function displayInfo() {
        echo "Brand: " . $this->brand . "<br>";
        echo "Color: " . $this->color . "<br>";
        echo "Year: " . $this->year . "<br>";
    }
}
$brand = ("Toyota");
$color = ("Red");
$year = 2010;
$less6 = new Car($brand, $color, $year);
echo "Car information is: <br>";
echo $less6->displayInfo();

//Bai 7
class Fraction {
    private $numerator1;
    private $denominator1;
    private $numerator2;
    private $denominator2;

    public function __construct($numerator1, $denominator1, $numerator2, $denominator2) {
        $this->numerator1 = $numerator1;
        $this->denominator1 = $denominator1;
        $this->numerator2 = $numerator2;
        $this->denominator2 = $denominator2;
    }

    public function add() {
        $resultNumerator = ($this->numerator1 * $this->denominator2) + ($this->numerator2 * $this->denominator1);
        $resultDenominator = $this->denominator1 * $this->denominator2;
        return $resultNumerator. "/". $resultDenominator;
    }

    public function subtract() {
        $resultNumerator = ($this->numerator1 * $this->denominator2) - ($this->numerator2 * $this->denominator1);
        $resultDenominator = $this->denominator1 * $this->denominator2;
        return $resultNumerator. "/". $resultDenominator;
    }

    public function multiply() {
        $resultNumerator = $this->numerator1 * $this->numerator2;
        $resultDenominator = $this->denominator1 * $this->denominator2;
        return $resultNumerator. "/". $resultDenominator;
    }

    public function divide() {
        $resultNumerator = $this->numerator1 * $this->denominator2;
        $resultDenominator = $this->denominator1 * $this->numerator2;
        return $resultNumerator. "/". $resultDenominator;
    }
}
$numerator1 = 1;
$denominator1 = 2;
$numerator2 = 2;
$denominator2 = 3;
$less7 = new Fraction($numerator1, $denominator1, $numerator2, $denominator2);
echo "Add is: ". $less7->add(). "<br>";
echo "Subtract is: ". $less7->subtract(). "<br>";
echo "Multiply is: ". $less7->multiply(). "<br>";
echo "Divide is: ". $less7->divide(). "<br>";

//Bai 8
class Person {
    private $name;
    private $age;
    private $address;

    public function __construct($name, $age, $address) {
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
    }

    public function displayInfo() {
        echo "Name: " . $this->name . "<br>";
        echo "Age: " . $this->age . "<br>";
        echo "Address: " . $this->address . "<br>";
    }
}
$name = ("Nguyen Van A");
$age = 22;
$address = ("123 Ha Noi");
$less8 = new Person($name, $age, $address);
echo "Information is: <br>";
echo $less8->displayInfo();

//Bai 9
class Product {
    private $name;
    private $price;
    private $description;

    public function __construct($name, $price, $description) {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
    }

    public function displayInfo() {
        echo "Name: " . $this->name . "<br>";
        echo "Price: " . $this->price . "<br>";
        echo "Description: " . $this->description . "<br>";
    }
}
$name = ("Socola");
$price = 15.000;
$description = ("Dark chocolate 90%");
$less9 = new Product($name, $price, $description);
echo "Product information is: <br>";
echo $less9->displayInfo();

//Bai 10
class HotelReservation {
    private $name;
    private $checkInDate;
    private $numberOfNights;

    public function __construct($name, $checkInDate, $numberOfNights) {
        $this->name = $name;
        $this->checkInDate = $checkInDate;
        $this->numberOfNights = $numberOfNights;
    }

    public function calculateTotalAmount($roomPrice) {
        return $roomPrice * $this->numberOfNights;
    }
}
$name = ("Room 101");
$checkInDate = ("2023/07/03");
$numberOfNights = 5;
$less10 = new HotelReservation($name, $checkInDate, $numberOfNights);
echo "Total = ". $less10->calculateTotalAmount(15,000);
?>
