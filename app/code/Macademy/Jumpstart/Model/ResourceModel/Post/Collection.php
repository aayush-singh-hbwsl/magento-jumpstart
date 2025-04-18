<?php
namespace Macademy\Jumpstart\Model\ResourceModel\Post;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
	protected $_idFieldName = 'post_id';
	protected $_eventPrefix = 'macademy_jumpstart_post_collection';
	protected $_eventObject = 'post_collection';

	/**
	 * Define resource model
	 *
	 * @return void
	 */
	protected function _construct()
	{
		$this->_init('Macademy\Jumpstart\Model\Post', 'Macademy\Jumpstart\Model\ResourceModel\Post');
	}

}
