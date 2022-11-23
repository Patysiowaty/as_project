<?php

namespace app\forms;

use InvalidArgumentException;

class CalculatorForm
{
    private int $amountOfCredit = 0;
    private int $creditYears = 0;
    private int $interestValue = 0;

    public function __construct()
    {
    }

    private function tryCast($value): int
    {
        if (!isset($value)) {
            throw new InvalidArgumentException("Value is not set!");
        }

        if (!is_numeric($value)) {
            throw new InvalidArgumentException("Value is not numeric!");
        }

        return intval($value);
    }

    private function isInRange(int $min, int $max, int $value): bool
    {
        return $value >= $min && $value <= $max;
    }

    public function validate(): bool
    {
        $result = true;

        if (!$this->isInRange(1, 10000000, $this->amountOfCredit)) {
            getMessages()->pushError("Amount of credit must be in the range 1 - 10000000!");
            $result = false;
        }

        if (!$this->isInRange(1, 40, $this->creditYears)) {
            getMessages()->pushError("Years of credit must be in the range 1 - 40!");
            $result = false;
        }

        if (!$this->isInRange(0, 200, $this->interestValue)) {
            getMessages()->pushError("Interest value must be in the range 0 - 200!");
            $result = false;
        }

        return $result;
    }

    public function readRequestData(): void
    {
        $value = $_REQUEST ['amount_of_credit'];
        $years = $_REQUEST ['credit_years'];
        $interest = $_REQUEST ['interest_value'];

        try {
            $this->amountOfCredit = $this->tryCast($value);
            $this->creditYears = $this->tryCast($years);
            $this->interestValue = $this->tryCast($interest);
        } catch (InvalidArgumentException $e) {
            getMessages()->pushError($e->getMessage());
        }
    }


    public function getAmountOfCredit(): int
    {
        return $this->amountOfCredit;
    }

    public function getCreditYears(): int
    {
        return $this->creditYears;
    }

    public function getInterestValue(): int
    {
        return $this->interestValue;
    }

}