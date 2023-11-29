<?php

class Student
{
    public string $id;
    public string $name;
    public int $value;
    private string  $sample;

    public function setSample(string $sample): void
    {
        $this->sample = $sample;
    }

    public function __clone() //CLONING
    {
        unset($this->sample); //MENGHAPUS SALAH SATU CLONNINGAN DARI PROPERTIE
    }

    public function __toString(): string //TO STRING
    {
        return "Student id:$this->id, name:$this->name, value:$this->value";
    }

    public function __invoke(...$arguments): void
    {
        $join = join("," , $arguments);
        echo "Invoke student with arguments $join" . PHP_EOL;
    }

    public function __debugInfo(): array
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "value" => $this->value,
            "sample" => $this->sample,
            "author" => "Bramasta",
            "version" => "0.0.7.x"
        ];
    }
}