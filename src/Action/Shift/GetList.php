<?php
namespace Spark\Project\Action\Shift;

use Aura\Payload\Payload;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use Spark\Adr\DomainInterface;
use Spark\Project\Domain\Mapper;
use Spark\Project\Transformer\Shift;

class GetList implements DomainInterface
{

    public function __construct(Mapper\Shift $shifts)
    {
        $this->shifts = $shifts;
    }

    public function __invoke(array $input)
    {
        $payload = new Payload();
        $payload->setStatus(Payload::FOUND);

        $shifts = new Collection($this->shifts->findAll(), new Shift);

        $payload->setOutput([
            'shifts' => (new Manager)->createData($shifts)->toArray(),
        ]);

        return $payload;
    }
}