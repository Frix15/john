<!DOCTYPE html>
<html>
<head>
    <title>SQL Functions Demo</title>
    <style>
        body { font-family: Arial; }
        table { width: 100%; border-collapse: collapse; margin-bottom: 40px; }
        th, td { border: 1px solid #ccc; padding: 8px; }
        th { background: #f4f4f4; }
        h2 { margin-top: 40px; }
    </style>
</head>
<body>

<h1>SQL Functions Demonstration</h1>

<h2> String Functions</h2>
<table>
<tr><th>Function</th><th>Description</th><th>Example Code</th><th>Output</th></tr>
<tr><td>UPPER()</td><td>Convert to uppercase</td><td>SELECT UPPER(name) FROM employees;</td><td><a href="string/upper.php">View</a></td></tr>
<tr><td>LOWER()</td><td>Convert to lowercase</td><td>SELECT LOWER(name) FROM employees;</td><td><a href="string/lower.php">View</a></td></tr>
<tr><td>LENGTH()</td><td>Count characters</td><td>SELECT LENGTH(name) FROM employees;</td><td><a href="string/length.php">View</a></td></tr>
<tr><td>CONCAT()</td><td>Join strings</td><td>SELECT CONCAT(name, ' - ', department) FROM employees;</td><td><a href="string/concat.php">View</a></td></tr>
<tr><td>SUBSTRING()</td><td>Extract part of string</td><td>SELECT SUBSTRING(name, 1, 5) FROM employees;</td><td><a href="string/substring.php">View</a></td></tr>
<tr><td>REPLACE()</td><td>Replace text</td><td>SELECT REPLACE(name, 'a', 'X') FROM employees;</td><td><a href="string/replace.php">View</a></td></tr>
<tr><td>TRIM()</td><td>Remove spaces</td><td>SELECT TRIM(name) FROM employees;</td><td><a href="string/trim.php">View</a></td></tr>
</table>

<h2> Numeric Functions</h2>
<table>
<tr><th>Function</th><th>Description</th><th>Example Code</th><th>Output</th></tr>
<tr><td>COUNT()</td><td>Count rows</td><td>SELECT COUNT(*) FROM employees;</td><td><a href="numeric/count.php">View</a></td></tr>
<tr><td>SUM()</td><td>Total salary</td><td>SELECT SUM(salary) FROM employees;</td><td><a href="numeric/sum.php">View</a></td></tr>
<tr><td>AVG()</td><td>Average salary</td><td>SELECT AVG(salary) FROM employees;</td><td><a href="numeric/avg.php">View</a></td></tr>
<tr><td>MAX()</td><td>Highest salary</td><td>SELECT MAX(salary) FROM employees;</td><td><a href="numeric/max.php">View</a></td></tr>
<tr><td>MIN()</td><td>Lowest salary</td><td>SELECT MIN(salary) FROM employees;</td><td><a href="numeric/min.php">View</a></td></tr>
<tr><td>ROUND()</td><td>Round number</td><td>SELECT ROUND(salary, -3) FROM employees;</td><td><a href="numeric/round.php">View</a></td></tr>
<tr><td>CEILING()</td><td>Round up</td><td>SELECT CEILING(AVG(salary)) FROM employees;</td><td><a href="numeric/ceil.php">View</a></td></tr>
<tr><td>FLOOR()</td><td>Round down</td><td>SELECT FLOOR(AVG(salary)) FROM employees;</td><td><a href="numeric/floor.php">View</a></td></tr>
</table>

<h2> Date Functions</h2>
<table>
<tr><th>Function</th><th>Description</th><th>Example Code</th><th>Output</th></tr>
<tr><td>NOW()</td><td>Current date & time</td><td>SELECT NOW();</td><td><a href="date/now.php">View</a></td></tr>
<tr><td>CURDATE()</td><td>Current date</td><td>SELECT CURDATE();</td><td><a href="date/curdate.php">View</a></td></tr>
<tr><td>YEAR()</td><td>Extract year</td><td>SELECT YEAR(hire_date) FROM employees;</td><td><a href="date/year.php">View</a></td></tr>
<tr><td>MONTH()</td><td>Extract month</td><td>SELECT MONTH(hire_date) FROM employees;</td><td><a href="date/month.php">View</a></td></tr>
<tr><td>DAY()</td><td>Extract day</td><td>SELECT DAY(hire_date) FROM employees;</td><td><a href="date/day.php">View</a></td></tr>
<tr><td>DATEDIFF()</td><td>Difference in days</td><td>SELECT DATEDIFF(CURDATE(), hire_date) FROM employees;</td><td><a href="date/datediff.php">View</a></td></tr>
<tr><td>DATE_ADD()</td><td>Add days</td><td>SELECT DATE_ADD(hire_date, INTERVAL 30 DAY) FROM employees;</td><td><a href="date/date_add.php">View</a></td></tr>
<tr><td>DATE_SUB()</td><td>Subtract days</td><td>SELECT DATE_SUB(hire_date, INTERVAL 30 DAY) FROM employees;</td><td><a href="date/date_sub.php">View</a></td></tr>
</table>

<h2> Advanced SQL Functions</h2>
<table>
<tr><th>Function</th><th>Description</th><th>Example Code</th><th>Output</th></tr>
<tr><td>IFNULL()</td><td>Replace NULL values</td><td>SELECT IFNULL(department, 'Unknown') FROM employees;</td><td><a href="advanced/ifnull.php">View</a></td></tr>
<tr><td>COALESCE()</td><td>First non-null value</td><td>SELECT COALESCE(department, 'None') FROM employees;</td><td><a href="advanced/coalesce.php">View</a></td></tr>
<tr><td>CASE</td><td>Conditional logic</td><td>SELECT name, CASE WHEN salary > 60000 THEN 'High' ELSE 'Low' END FROM employees;</td><td><a href="advanced/case.php">View</a></td></tr>
<tr><td>GROUP BY</td><td>Group rows</td><td>SELECT department, COUNT(*) FROM employees GROUP BY department;</td><td><a href="advanced/groupby.php">View</a></td></tr>
<tr><td>HAVING</td><td>Filter groups</td><td>SELECT department, COUNT(*) FROM employees GROUP BY department HAVING COUNT(*) > 1;</td><td><a href="advanced/having.php">View</a></td></tr>
<tr><td>EXISTS</td><td>Check subquery existence</td><td>SELECT name FROM employees WHERE EXISTS (SELECT 1 FROM employees WHERE salary > 75000);</td><td><a href="advanced/exists.php">View</a></td></tr>
<tr><td>DISTINCT</td><td>Remove duplicates</td><td>SELECT DISTINCT department FROM employees;</td><td><a href="advanced/distinct.php">View</a></td></tr>
</table>

</body>
</html>
