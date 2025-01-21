```php
function processData(array $data): array {
  $processedData = [];
  foreach ($data as $key => $value) {
    if (is_array($value)) {
      $processedData[$key] = processData($value); // Recursive call on a copy
    } elseif (is_string($value)) {
      $processedData[$key] = (strlen($value) > 10) ? substr($value, 0, 10) : $value; //Efficient string handling
    } else {
        $processedData[$key] = $value; // Handle other data types
    }
  }
  return $processedData; // Return a new array
}

$data = [
  'name' => 'John Doe',
  'address' => '123 Main Street, Anytown, CA 91234',
  'details' => [
    'phone' => '555-1234',
    'email' => 'john.doe@example.com',
    'description' => 'This is a very long description that exceeds the 10 character limit.'
  ]
];

$processedData = processData($data);
print_r($processedData);
```