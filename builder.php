<?php
class Computer
{
    private $cpu = '';
    private $gpu = '';
    private $ram = '';

    // Setters block
    public function setCpu($cpu)
    {
        $this->cpu = $cpu;
    }
    public function setGpu($gpu)
    {
        $this->gpu = $gpu;
    }
    public function setRam($ram)
    {
        $this->ram = $ram;
    }
    // Getters block
    public function getCpu()
    {
        return $this->cpu;
    }
    public function getGpu()
    {
        return $this->gpu;
    }
    public function getRam()
    {
        return $this->ram;
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
    abstract public function buildGpu($gpu);
    abstract public function buildRam($ram);
}

class CustomComputer extends ComputerBuilder
{
    public function buildCpu($cpu)
    {
        $this->computer->setCpu($cpu);
    }
    public function buildGpu($gpu)
    {
        $this->computer->setGpu($gpu);
    }
    public function buildRam($ram)
    {
        $this->computer->setRam($ram);
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
        $this->computerBuilder->buildGpu($data['gpu']);
        $this->computerBuilder->buildRam($data['ram']);
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
        echo $this->name . 'The comp is ready, please come';
    }
}



    if(!empty($_POST)){

        $assemble = new Assemble();

        $customComputer = new CustomComputer();

        $assemble->setComputerBuilder($customComputer);

        $assemble->runAssemble($_POST);

        $computer = $assemble->getAssemble();


        $alex = new Customer('Alex');
        $misha = new Customer('Misha');

        $saleManager = new SaleManager();
        $saleManager->addCustomer($alex);
        $saleManager->addCustomer($misha);

        $misha->eventHandler();

    }

var_dump($computer);



