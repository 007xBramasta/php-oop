<?php

class zero
{
    private array $properties = [];

    public function __get($name) //GET UNTUK MENGAMBIL DATA SESUAI PROPERTIE NAMENYA
    {
        return $this->properties[$name];
    }

    public function __set($name, $value) //SET UNTUK MENGUBAH DATA SESUAI PROPERTIE NAMENYA
    {
        $this->properties[$name] = $value;
    }

    public function __isset($name): bool //ISSET UNTUK MEGECEK APAKAH SUDAH DI SET BERDASARKAN PROPERTIE NAMENYA
    {
        return isset($this->properties[$name]);
    }

    public function __call($name, $arguments) //DI EKSEKUSI KETIKA MEMANGGIL FUNCTION YANG TIDAK TERSEDIA
    {
        $join = join("," , $arguments);
        echo "Call function $name with arguments $join" . PHP_EOL;
    }

    public static function __callStatic($name, $arguments) //DIEKSEKUSI KETIKA MEMANGGIL STATIC FUNCTION YANG TIDAK TERSEDIA
    {
        $join = join ("," , $arguments);
        echo "Call static function $name with arguments $join" . PHP_EOL;
    }

}

$zero = new Zero();
$zero->firstName = "Bramasta";
$zero->middleName = "Albatio";
$zero->lastName = "Haryonooo";

echo "First Name : $zero->firstName" . PHP_EOL;
echo "Midlle Name : $zero->middleName" . PHP_EOL;
echo "Last Name : $zero->lastName" . PHP_EOL;

$zero->sayHello("Bramasta", "Albatio");
Zero::sayGoodbye("Bramasta", "Albatio");