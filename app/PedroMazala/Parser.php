<?php
/**
 * Created by PhpStorm.
 * User: DB1\matheus.leite
 * Date: 8/31/18
 * Time: 9:25 AM
 */

namespace app\PedroMazala;


class Parser
{
    /**
     * @var ParserInterface
     */
    private $parser;
    /**
     * @var Data
     */
    private $data;

    public function __construct(ParserInterface $parser, Data $data)
    {
        $this->parser = $parser;
        $this->data = $data;
    }

    public function parse(): array
    {
        $return = [];
        while ($this->data->hasNext()) {
            $value = $this->data->getNextItem();

            array_push($return, $this->parser->parse($value));
        }

        return $return;
    }
}