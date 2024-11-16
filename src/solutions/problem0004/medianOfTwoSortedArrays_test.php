<?php

namespace problem0004;

beforeEach(fn() => $this->solution = new Solution());

dataset('case', [
    [[1, 3], [2], 2.0],
    [[1, 2], [3, 4], 2.5]
]);

test('4.无重复字符的最长子串', function (array $nums1, array $nums2, float $expected): void {
    expect($this->solution->findMedianSortedArrays($nums1, $nums2))
        ->toEqual($expected);
})->with('case');
