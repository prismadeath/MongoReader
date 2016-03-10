<?php
namespace Twister;
/**
 * @brief manage the cursor
 * @class TwisterBag
 * @author prismadeath (Benjamin Baschet)
 */
class Cursor extends Object implements \Iterator
{
    private $documents=array();
    private $position=0;
    private $collection=null;
    /**
     * 
     * @param Twister $t
     * @param type $result
     */
    public function __construct(Collection $collection, $result) {
        $this->collection = $collection;
        $this->documents=$result;
        $this->position = 0;
    }
    /**
     * @brief go to the next entry
     * @return \TwisterBag
     */
    public function next()
    {
        $this->documents->next();
        return $this;
    }
    /**
     * @brief get current entry
     * @return type
     */
    public function current()
    {
        return $this->collection->cast((object)$this->documents->current());
    }
    /**
     * @brief get the key entry
     * @return type
     */
    public function key()
    {
        return $this->documents->key();
    }
    /**
     * @brief valid the current entry
     * @return type
     */
    public function valid()
    {
        return $this->documents->valid();
    }
    /**
     * @brief go to the first entry
     * @return \TwisterBag
     */
    public function rewind()
    {
        $this->documents->rewind();
        return $this;
    }
}