<?php
/**
 * @author    Ecommage Team
 * Created by Thomas Nguyen.
 * @copyright Copyright (c) 25/03/2021 Ecommage (https://www.ecommage.com)
 */

namespace Core\Mvc\Model;

use RuntimeException;
use Core\Mvc\DataObject;
use Laminas\Db\TableGateway\TableGatewayInterface;

/**
 * Class AbstractModel
 *
 * @package Core\Framework\Model
 */
abstract class AbstractModel extends DataObject
{
    /**
     * Name of object id field
     *
     * @var string
     */
    protected $idFieldName = 'id';
    /**
     * @var TableGatewayInterface
     */
    protected $tableGateway;

    /**
     * AbstractModel constructor.
     *
     * @param TableGatewayInterface $tableGateway
     * @param array                 $data
     */
    public function __construct(
        TableGatewayInterface $tableGateway,
        array $data = []
    ) {
        $this->tableGateway = $tableGateway;
        parent::__construct($data);
    }

    /**
     * @return mixed
     */
    public function fetchAll()
    {
        return $this->tableGateway->select();
    }

    /**
     * @param $id
     *
     * @return mixed
     */
    public function load($id)
    {
        $id     = (int)$id;
        $rowset = $this->tableGateway->select([$this->idFieldName => $id]);
        $row    = $rowset->current();
        if (!$row) {
            throw new RuntimeException(sprintf('Could not find row with identifier %d', $id));
        }

        return $row;
    }

    /**
     * @param DataObject $object
     */
    public function save(DataObject $object)
    {
        $data = $object->getData();
        $id   = (int)$object->getData($this->idFieldName);
        if ($id === 0) {
            $this->tableGateway->insert($data);
            return;
        }

        try {
            $this->load($id);
        } catch (RuntimeException $e) {
            throw new RuntimeException(sprintf('Cannot update album with identifier %d; does not exist', $id));
        }

        $this->tableGateway->update($data, [$this->idFieldName => $id]);
    }

    /**
     * @param $id
     */
    public function delete($id)
    {
        $this->tableGateway->delete([$this->idFieldName => (int)$id]);
    }
}
