# PHP Recursive Function Bug

This repository demonstrates a bug in a PHP function that recursively processes data, truncating strings longer than 10 characters.  The function modifies the input array in place, leading to unexpected behavior, particularly with deeply nested arrays. The solution improves performance and avoids potential side effects by passing array copies to the recursive calls and providing more robust error handling. 

## Bug Description
The `processData` function is designed to process an array of data recursively. When encountering an array, it calls itself to traverse the data structure. Strings longer than 10 characters are truncated.  However, the function modifies the input array directly without creating a copy, which can lead to unintended consequences and performance issues when dealing with large data sets.