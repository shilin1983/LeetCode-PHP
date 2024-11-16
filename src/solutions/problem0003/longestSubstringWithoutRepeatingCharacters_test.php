<?php

namespace problem0003;

beforeEach(fn() => $this->solution = new Solution());

dataset('case', [
    ['abcabcbb', 3],
    ['bbbbb', 1],
    ['pwwkew', 3],
]);

test('3.无重复字符的最长子串', function (string $s, int $expected): void {
    expect($this->solution->lengthOfLongestSubstring($s))
        ->toEqual($expected);
})->with('case');
