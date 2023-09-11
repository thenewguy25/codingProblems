<?php
function multiplyMatrices($matrix1, $matrix2)
{
    $rows1 = count($matrix1);
    $cols1 = count($matrix1[0]);
    $rows2 = count($matrix2);
    $cols2 = count($matrix2[0]);

    if ($cols1 !== $rows2) {
        // Matrices cannot be multiplied if the number of columns in the first matrix is not equal to the number of rows in the second matrix.
        throw new InvalidArgumentException("Cannot multiply these matrices. The number of columns in the first matrix must be equal to the number of rows in the second matrix.");
    }

    $result = array();

    for ($i = 0; $i < $rows1; $i++) {
        $result[$i] = array();
        for ($j = 0; $j < $cols2; $j++) {
            $result[$i][$j] = 0;
            for ($k = 0; $k < $cols1; $k++) {
                $result[$i][$j] += $matrix1[$i][$k] * $matrix2[$k][$j];
            }
        }
    }

    return $result;
}

$matrixA = array(
    array(1, 2),
    array(3, 4),
);

$matrixB = array(
    array(5, 6),
    array(7, 8),
);
$resultMatrix = multiplyMatrices($matrixA, $matrixB);

print_r($resultMatrix);

?>