<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * WarehouseLine Entity
 *
 * @property string $id
 * @property string $product_id
 * @property string $warehouse_id
 * @property float $qty
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Product $product
 * @property \App\Model\Entity\Warehouse $warehouse
 */
class WarehouseLine extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'product_id' => true,
        'warehouse_id' => true,
        'qty' => true,
        'created' => true,
        'modified' => true,
        'product' => true,
        'warehouse' => true
    ];
}
