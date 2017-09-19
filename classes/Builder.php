<?php

class Computer
{
    private $cpu = '';
    private $mboard = '';
    private $ram = '';
    private $hdd = '';
    private $vcard = '';

    public function setCpu($cpu)
    {
        $this->cpu  = $cpu;
    }
    public function setMboard($mboard)
    {
        $this->mboard = $mboard;
    }
    public function setRam($ram)
    {
        $this->ram = $ram;
    }

    public function setHdd($hdd)
    {
        $this->hdd = $hdd;
    }
    public function setVcard($vcard)
    {
        $this->vcard = $vcard;
    }
}

abstract class BuilderComputer
{
    protected $computer = '';

    public function getComputer()
    {
        return $this->computer;
    }

    public function createNewComputer()
    {
        $this->computer = new Computer();
    }

    abstract public function buildCpu();
    abstract public function buildMboard();
    abstract public function buildRam();

    abstract public function buildHdd();
    abstract public function buildVcard();
}

class BuilderComputerLapTop extends BuilderComputer
{
    public function buildCpu()
    {
        $this->computer->setCpu($_POST["cpu"]);
    }
    public function buildMboard()
    {
        $this->computer->setMboard($_POST["mb"]);
    }
    public function buildRam()
    {
        $this->computer->setRam($_POST["ram"]);
    }

    public function buildHdd()
    {
        $this->computer->setHdd($_POST["hdd"]);
    }
    public function buildVcard()
    {
        $this->computer->setVcard($_POST["vcard"]);
    }
}

class ComputerBuilder
{
    private $builderComputer;

    public function setBuilderComputer(BuilderComputer $compBuilder)
    {
        $this->builderComputer = $compBuilder;
    }
    public function getComputer()
    {
        return $this->builderComputer->getComputer();
    }

    public function constructComputer()
    {
        $this->builderComputer->createNewComputer();

        $this->builderComputer->buildCpu();
        $this->builderComputer->buildMboard();
        $this->builderComputer->buildRam();

        $this->builderComputer->buildHdd();
        $this->builderComputer->buildVcard();
    }
}

$computerBuilder = new ComputerBuilder();

$laptop = new BuilderComputerLapTop();

$computerBuilder->setBuilderComputer($laptop);
$computerBuilder->constructComputer();

$comp = $computerBuilder->getComputer();

