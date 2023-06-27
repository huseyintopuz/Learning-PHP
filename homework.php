$planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];

function cleanAndRandomize($array, $count): array
{
$filteredArray = array_filter($array, function ($value) {
return $value !== "" && $value !== Null;
});
$randomKeys = array_rand($filteredArray, $count);
return array_map(function ($key) use ($filteredArray){
return $filteredArray[$key];
}, (array)$randomKeys);
}

print_r(cleanAndRandomize($planets, 2));
print_r(cleanAndRandomize($planets, 3));
print_r(cleanAndRandomize($planets, 2));
print_r(cleanAndRandomize($planets, 4));
print_r(cleanAndRandomize($planets, 5));