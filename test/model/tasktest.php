<?php

namespace App\model;

use PHPUnit\Framework\TestCase;

final class TaskTest extends TestCase
{
    public function testConstructor(){
        $task = new task("Tarefa1");
        $this->assertSame('Tarefa1', $task->title);
    }
}