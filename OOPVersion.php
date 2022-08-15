<?php

class ZeroRemover
{
    public function remove(int $number): int
    {
        return (int)str_replace("0", '', (string)$number);
    }
}

class TabShiftDetector
{
    public const SHIFT = 'Shift';
    public const TAB = 'Tab';

    private ZeroRemover $zeroRemover;

    public function __construct(ZeroRemover $zeroDeleter)
    {
        $this->zeroRemover = $zeroDeleter;
    }

    public function detect(int $a, int $b): string
    {
        $aAfterDeleteZero = $this->zeroRemover->remove($a);
        $bAfterDeleteZero = $this->zeroRemover->remove($b);

        $total = $a + $b;
        $totalAfterDeleteZero = $this->zeroRemover->remove($total);

        if ($this->tabDetector($aAfterDeleteZero, $bAfterDeleteZero, $totalAfterDeleteZero)) {
            return self::TAB;
        }

        return self::SHIFT;
    }

    private function tabDetector(int $aAfterDeleteZero, int $bAfterDeleteZero, int $totalAfterDeleteZero): bool
    {
        return $aAfterDeleteZero + $bAfterDeleteZero === $totalAfterDeleteZero;
    }
}

$input = readline();
[$a, $b] = explode(' ', $input);

$detector = new TabShiftDetector(new ZeroRemover());
echo $detector->detect($a, $b);
