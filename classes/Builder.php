<?php
class Computer
{
    private $cpu = '';
    private $mboard = '';
    private $ram = '';

    private $hdd = '';
    private $vcard = '';

    // Setters block
    public function setCpu($cpu)
    {
        $this->cpu = $cpu;
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

    // Getters block
    public function getCpu()
    {
        return $this->cpu;
    }
    public function getMboard()
    {
        return $this->mboard;
    }
    public function getRam()
    {
        return $this->ram;
    }

    public function getHdd()
    {
        return $this->hdd;
    }
    public function getVcard()
    {
        return $this->vcard;
    }
}

abstract class ComputerBuilder
{
    protected $computer;

    public function getComputer()
    {
        return $this->computer;
    }

    public function createNewComputer()
    {
        $this->computer = new Computer();
    }

    abstract public function buildCpu($cpu);
    abstract public function buildMboard($mboard);
    abstract public function buildRam($ram);

    abstract public function buildHdd($hdd);
    abstract public function buildVcard($vcard);
}

class CustomComputer extends ComputerBuilder
{
    public function buildCpu($cpu)
    {
        $this->computer->setCpu($cpu);
    }
    public function buildMboard($mboard)
    {
        $this->computer->setMboard($mboard);
    }
    public function buildRam($ram)
    {
        $this->computer->setRam($ram);
    }

    public function buildHdd($hdd)
    {
        $this->computer->setHdd($hdd);
    }
    public function buildVcard($vcard)
    {
        $this->computer->setVcard($vcard);
    }
}

class Assemble
{
    private $computerBuilder;

    public function setComputerBuilder(ComputerBuilder $cb)
    {
        $this->computerBuilder = $cb;
    }

    public function getAssemble()
    {
        return $this->computerBuilder->getComputer();
    }

    public function runAssemble($data)
    {
        $this->computerBuilder->createNewComputer();

        $this->computerBuilder->buildCpu($data['cpu']);
        $this->computerBuilder->buildMboard($data['mboard']);
        $this->computerBuilder->buildRam($data['ram']);

        $this->computerBuilder->buildHdd($data['hdd']);
        $this->computerBuilder->buildVcard($data['vcard']);
    }
}

interface SaleManagerInterface
{
    public function addCustomer(Customer $customer);

    public function removeCustomer(Customer $customer);

    public function notify();
}

class SaleManager implements SaleManagerInterface
{
    private $customers = [];

    public function addCustomer(Customer $c)
    {
        $this->customers[] = $c;
    }

    public function removeCustomer(Customer $c)
    {
        //
    }

    public function notify()
    {
        foreach($this->customers as $customer){
            $customer->eventHandler();
        }
    }
}

class Customer
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;

    }
    public function eventHandler()
    {
        echo $this->name . ', your PC is ready, please come to pick it';
    }
}

    if(!empty($_POST)){

        $assemble = new Assemble();

        $customComputer = new CustomComputer();

        $assemble->setComputerBuilder($customComputer);

        $assemble->runAssemble($_POST);

        $computer = $assemble->getAssemble();

        $cust = new Customer($_POST['username']);

        $saleManager = new SaleManager();
        $saleManager->addCustomer($cust);

        // $misha->eventHandler();

    }
