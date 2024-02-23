SELECT
    id,
    age,
    coins_needed,
    power
FROM Wands
LEFT JOIN Wands_Property
USING (code)
RIGHT JOIN
    (SELECT
        age,
        MIN(coins_needed) AS coins_needed,
        power
    FROM
        (SELECT
            w.id,
            p.age,
            w.coins_needed,
            w.power
        FROM Wands w
        LEFT JOIN Wands_Property p
        ON w.code = p.code
        WHERE p.is_evil = 0) AS Innerquery
    GROUP BY age, power) AS Subquery
USING (age, coins_needed, power)
ORDER BY power DESC, age DESC;