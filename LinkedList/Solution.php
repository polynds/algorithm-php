<?php
namespace LinkedList;

class Solution {

    /**
     * @param ListNode $head
     * @param Integer $val
     * @return ListNode
     */
    function removeElements($head, $val) {
        while($head != null && $head->val == $val){
            $head = $head->next;
        }
        if($head == null){
            return null;
        }

        $prev = $head;
        while ($prev->next != null){
            if($prev->next->val == $val){
                $prev->next = $prev->next->next;
            }else{
                $prev = $prev->next;
            }
        }

        return $head;
    }
}