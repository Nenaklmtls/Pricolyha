<?php

        class kettle //чайник
        {
            private $brand;
            private $volume;

            function __construct($brand, $volume)
            {
                $this->brand = $brand;
                $this->volume = $volume;
            }


            public function getBrand()
            {
                return $this->brand;
            }

            public function getVolume()
            {
                return $this->volume;
            }
            public function getInfo()
            {
                return "{$this->brand}" . "{$this->volume}";
            }
        }

$kettle = new kettle("Tefal", 1700);
echo "Модель - " . $kettle->getBrand();
echo "<br>";
echo "Миллилитр - " . $kettle->getVolume();


                class Powerbank
{
    private $brand;
    private $capacity;

    function __construct($brand, $capacity)
    {
        $this->brand = $brand;
        $this->capacity = $capacity;
    }


    public function getBrand()
    {
        return $this->brand;
    }

    public function getCapacity()
    {
        return $this->capacity;
    }
    public function getInfo()
    {
        return "{$this->brand}" . "{$this->capacity}";
    }
}

$Powerbank = new Powerbank("MI", 10000 );
echo "Модель - " . $Powerbank->getBrand();
echo "<br>";
echo "Миллиампер час - " . $Powerbank->getCapacity();

class Monitor //монитор)
{
    private $brand;
    private $size;

    function __construct($brand, $size)
    {
        $this->brand = $brand;
        $this->size = $size;
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function getSize()
    {
        return $this->size;
    }

    public function getInfo()
    {
        return "{$this->brand}" . "{$this->size}";
    }
}

$monitor = new monitor("Samsung", 24);
echo "Модель - " . $monitor->getBrand();
echo "<br>";
echo "Дюйм - " . $monitor->getSize();


                class speaker //колонка
{
    private $brand;
    private $sound_power ;

    function __construct($brand, $sound_power)
    {
        $this->brand = $brand;
        $this->sound_power = $sound_power;
    }


    public function getBrand()
    {
        return $this->brand;
    }

    public function getSound_power()
    {
        return $this->sound_power;
    }
    public function getInfo()
    {
        return "{$this->brand}" . "{$this->sound_power}";
    }
}

$speaker = new speaker("JBL", 30 );
echo "Модель - " . $speaker->getBrand();
echo "<br>";
echo "Ватт - " . $speaker->getSound_power();


                    class camera //Видеокамера
{
    private $brand;
    private $fps ;

    function __construct($brand, $fps)
    {
        $this->brand = $brand;
        $this->fps = $fps;
    }


    public function getBrand()
    {
        return $this->brand;
    }

    public function getFps()
    {
        return $this->fps;
    }
    public function getInfo()
    {
        return "{$this->brand}" . "{$this->fps}";
    }
}

$camera = new camera("GoPro", 60 );
echo "Модель - " . $speaker->getBrand();
echo "<br>";
echo "кадр/с - " . $speaker->getFps();
