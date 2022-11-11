<?php

class Messages
{
    private array $errors = array();
    private array $infos = array();
    private int $num = 0;

    public function pushError($message): void
    {
        $this->errors[] = $message;
        $this->num++;
    }

    public function pushInfo($message): void
    {
        $this->infos[] = $message;
        $this->num++;
    }

    public function isEmpty(): bool
    {
        return $this->num == 0;
    }

    public function hasErrors(): bool
    {
        return count($this->errors) > 0;
    }

    public function hasInfos(): bool
    {
        return count($this->infos) > 0;
    }

    public function getErrors(): array
    {
        return $this->errors;
    }

    public function getInfos(): array
    {
        return $this->infos;
    }

    public function clear(): void
    {
        $this->errors = array();
        $this->infos = array();
        $this->num = 0;
    }
}