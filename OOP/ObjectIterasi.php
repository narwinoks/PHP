<?php


class Data implements IteratorAggregate
{
    var string $first = "first";
    public string $second = "second";
    private string $third = "third";
    protected string $forth = "forth";

//    public function getIterator()
//    {
//        $array = [
//            'first' => $this->first,
//            'second' => $this->second,
//            'forth' => $this->forth,
//            'third' => $this->third,
//        ];
//        return new ArrayIterator($array);
//    }
    public function getIterator()
    {
        yield 'first' => $this->first;
        yield 'second' => $this->second;
        yield 'forth' => $this->forth;
        yield 'third' => $this->third;
    }
}

$data = new Data();
foreach ($data as $key => $value) {
    echo "$key => $value" . PHP_EOL;
}