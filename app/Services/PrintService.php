<?php

namespace App\Services;

use Illuminate\Support\Facades\File;

class PrintService
{
    /**
     * Print the numbers
     *
     * @return void
     */
    public function print(): void
    {
        $result = $this->getResult();
        $result = implode("\n", $result);

        File::put(base_path('result.txt'), $result);
    }

    /**
     * Get the numbers list
     *
     * @return array
     */
    public function getResult(): array
    {
        $result = [];

        for ($i=1; $i < 101; $i++) {
            $toPrint = $i;

            if ($i % 3 == 0) {
                $toPrint = 'Fizz';
            }

            if ($i % 7 == 0) {
                $toPrint = 'Buzz';
            }

            if ($i % 3 == 0 && $i % 7 == 0) {
                $toPrint = 'FizzBuzz';
            }

            $result[] = $toPrint;
        }

        return $result;
    }
}
