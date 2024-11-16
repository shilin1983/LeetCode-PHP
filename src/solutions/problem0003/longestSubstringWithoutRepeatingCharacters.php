<?php

namespace problem0003;

class Solution
{
    public function lengthOfLongestSubstring(string $s): int
    {
        $left = $right = $maxLength = 0;
        $hashTable = [];

        while ($right < strlen($s)) {
            $char = $s[$right];

            // * 如果哈希表中存在当前元素，则移动滑动窗口左边界到当前元素的下一个位置
            if (array_key_exists($char, $hashTable)) {
                $left = max($left, $hashTable[$char] + 1);
            }

            // * 将当前元素及其索引插入哈希表
            $hashTable[$char] = $right;
            // * 移动滑动窗口右边界
            $right++;
            // * 计算当前滑动窗口最大长度
            $maxLength = max($maxLength, $right - $left);
        }

        return $maxLength;
    }
}
