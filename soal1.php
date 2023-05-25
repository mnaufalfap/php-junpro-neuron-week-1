<?php
$data = <<<'EOD'
X, -9\\\10\100\-5\\\0\\\\, A
Y, \\13\\1\, B
Z, \\\5\\\-3\\2\\\800, C
EOD;

$lines = explode("\n", $data);
$result = [];

foreach ($lines as $line) {
    $parts = explode(',', $line);
    $key = trim($parts[0]);
    $values = explode('\\', trim($parts[1]));
    $letter = trim($parts[2]);

    $count = 1;
    foreach ($values as $value) {
        if ($value !== '') {
            $result[] = [
                'key' => $key,
                'value' => $value,
                'letter' => $letter,
                'count' => $count
            ];
            $count++;
        }
    }
}

function compareByValue($a, $b) {
    $valueA = $a['value'];
    $valueB = $b['value'];

    // Mengonversi nilai menjadi integer jika mungkin
    $valueA = is_numeric($valueA) ? intval($valueA) : $valueA;
    $valueB = is_numeric($valueB) ? intval($valueB) : $valueB;

    if ($valueA === $valueB) {
        return 0;
    }

    return ($valueA < $valueB) ? -1 : 1;
}

usort($result, 'compareByValue');

$countMap = [];
foreach ($result as &$row) {
    $key = $row['key'] . $row['letter'];
    if (!isset($countMap[$key])) {
        $countMap[$key] = 1;
    }
    $row['count'] = $countMap[$key];
    $countMap[$key]++;
    echo $row['key'] . ', ' . $row['value'] . ', ' . $row['letter'] . ', ' . $row['count'] . "\n";
}