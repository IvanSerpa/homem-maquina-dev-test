<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Services\PrintService;

class PrintServiceTest extends TestCase
{
    private function expectedResult(): array
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

            $result[] = $toPrint;
        }

        return $result;
    }

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_numbers_list()
    {
        $expected = $this->expectedResult();
        $service = new PrintService;
        $result = $service->getResult();

        $this->assertEquals($expected, $result);
    }
}
