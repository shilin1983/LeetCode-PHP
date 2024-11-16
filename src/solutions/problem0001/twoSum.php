<?php

namespace program0001;

class Solution
{
    public function twoSum(array $nums, int $target): array
    {
        $hashTable = [];

        foreach ($nums as $key => $value) {
            // * 计算目标值与当前元素的差值
            $diff = $target - $value;

            // * 如果哈希表中存在差值，则返回差值与当前元素的索引
            if (array_key_exists($diff, $hashTable)) {
                return [$hashTable[$diff], $key];
            }

            // * 将当前元素及其索引插入哈希表
            $hashTable[$value] = $key;
        }

        return [];
    }
}
