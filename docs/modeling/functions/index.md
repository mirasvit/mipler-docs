---
sidebar_position: 2
title: Function List
---

| Name        | Type | Description |
| ----------- | ---- | ----------- |     
| [blank](/ace/blank) |  | Returns a blank (null) value. |
| [explore](/ace/explore) |  | Explores data by applying filters and aggregations. |
| [unnest](/ace/unnest) |  | Expands an array or nested structure into multiple rows. |
| [average_x](/ace/average_x) | Aggregation | Calculates the average of values in a column. |
| [concatenate_x](/ace/concatenate_x) | Aggregation | Concatenates multiple text values into a single string. |
| [count_rows](/ace/count_rows) | Aggregation | Returns the number of rows in a table. |
| [count_x](/ace/count_x) | Aggregation | Counts the number of non-null values in a column. |
| [cumulative](/ace/cumulative) | Aggregation | Calculates a cumulative sum or other cumulative aggregation. |
| [max_x](/ace/max_x) | Aggregation | Returns the maximum value in a column. |
| [min_x](/ace/min_x) | Aggregation | Returns the minimum value in a column. |
| [sum](/ace/sum) | Aggregation | Returns the sum of all values in a column. |
| [sum_x](/ace/sum_x) | Aggregation | Calculates the sum of values in a column. |
| [date](/ace/date) | Date and Time | Converts a year, month, and day into a date. |
| [date_add](/ace/date_add) | Date and Time | Moves the given date by a specified interval. |
| [date_diff](/ace/date_diff) | Date and Time | Returns the number of units (unit specified in Interval) between the input two dates. |
| [date_range](/ace/date_range) | Date and Time | Generates a range of dates between two dates. |
| [date_value](/ace/date_value) | Date and Time | Converts a text string to a date value. |
| [day](/ace/day) | Date and Time | Extracts the day from a date value. |
| [floor_date](/ace/floor_date) | Date and Time | Takes a date-time and rounds it down to the nearest date-time value of the specified time unit. |
| [format](/ace/format) | Date and Time | Converts a value to text in the specified format. |
| [hour](/ace/hour) | Date and Time | Extracts the hour from a datetime value. |
| [month](/ace/month) | Date and Time | Extracts the month from a date value. |
| [now](/ace/now) | Date and Time | Returns the current date and time. |
| [quarter](/ace/quarter) | Date and Time | Extracts the quarter from a date value. |
| [week](/ace/week) | Date and Time | Extracts the week number from a date value. |
| [weekday](/ace/weekday) | Date and Time | Returns a number representing the day of the week of the date provided. |
| [year](/ace/year) | Date and Time | Extracts the year from a date value. |
| [dimension](/ace/dimension) | Expressions | Convert an measure to the dimension. |
| [all](/ace/all) | Filter | Removes all filters from the current context. |
| [all_row](/ace/all_row) | Filter | Returns all rows from the current context without filtering. |
| [all_selected](/ace/all_selected) | Filter | Returns all selected values from the current context. |
| [calculate](/ace/calculate) | Filter | Evaluates an expression in a context modified by filters. |
| [create_relationship](/ace/create_relationship) | Filter | Creates a relationship between two tables. |
| [cross_filter](/ace/cross_filter) | Filter | Applies filters across related tables. |
| [filter](/ace/filter) | Filter | Returns a table that has been filtered. |
| [keep_filters](/ace/keep_filters) | Filter | Evaluates an expression in a context modified by filters. |
| [related](/ace/related) | Filter | Retrieves related data from a related table. |
| [related_x](/ace/related_x) | Filter | Retrieves and aggregates related data from a related table. |
| [selected_value](/ace/selected_value) | Filter | Returns the selected value from the current filter context. |
| [country_name](/ace/country_name) | Geo | Returns US Country Name |
| [and](/ace/and) | Logical | The AND function returns true if all of the provided arguments are logically true, and false if any of the provided arguments are logically false. |
| [case](/ace/case) | Logical | Evaluates multiple conditions and returns the value corresponding to the first condition that is true. |
| [if](/ace/if) | Logical | Returns one value if a logical expression is TRUE and another if it is FALSE. |
| [in_array](/ace/in_array) | Logical | Checks if a value exists in an array. |
| [is_blank](/ace/is_blank) | Logical | Checks if a value is blank (null, empty string, or whitespace). |
| [is_empty](/ace/is_empty) | Logical | Checks if a value is empty (null or empty string). |
| [is_in_range](/ace/is_in_range) | Logical | Checks if a value is within a specified range. |
| [not](/ace/not) | Logical | Returns the logical opposite of a boolean value. |
| [or](/ace/or) | Logical | The OR function returns true if any of the provided arguments are logically true, and false if all of the provided arguments are logically false. |
| [abs](/ace/abs) | Math | Returns the absolute value of a number. |
| [ceiling](/ace/ceiling) | Math | Rounds a number up to the nearest integer. |
| [convert](/ace/convert) | Math | Convert an expression to the specified data type. |
| [int](/ace/int) | Math | Converts a value to an integer number. |
| [rand](/ace/rand) | Math | Returns a random number between 0 and 1. |
| [as](/ace/as) | Table manipulation | Renames a column or expression with an alias. |
| [asc](/ace/asc) | Table manipulation | Sorts a column in ascending order. |
| [combine](/ace/combine) | Table manipulation | Combines multiple tables into a single table. |
| [desc](/ace/desc) | Table manipulation | Sorts a column in descending order. |
| [fill_inventory_gaps](/ace/fill_inventory_gaps) | Table manipulation | Fills gaps in inventory data by generating missing date/product combinations. |
| [generate_series](/ace/generate_series) | Table manipulation | Generates a series of values between a start and end value. |
| [left_join](/ace/left_join) | Table manipulation | Performs a left join between two tables. |
| [order_by](/ace/order_by) | Table manipulation | Sorts a table by one or more columns in ascending or descending order. |
| [pivot_index](/ace/pivot_index) | Table manipulation | Creates a pivot table with indexed values. |
| [select_columns](/ace/select_columns) | Table manipulation | Selects specific columns from a table. |
| [summarize_columns](/ace/summarize_columns) | Table manipulation | Creates a summary table based on specified columns and optional filter expressions. |
| [top_n](/ace/top_n) | Table manipulation | Returns the top N rows based on a specified column. |
| [union](/ace/union) | Table manipulation | Combines rows from multiple tables. |
| [init_cap](/ace/init_cap) | Text | Capitalizes the first letter of each word in a string. |
| [json_array_elements](/ace/json_array_elements) | Text | Expands a JSON array into individual elements. |
| [json_path](/ace/json_path) | Text | Allows to navigate and retrieve specific data from JSON objects or arrays based on a specified path or query. |
| [left](/ace/left) | Text | Returns the leftmost characters from a string. |
| [len](/ace/len) | Text | Returns the length of the given string. |
| [lower](/ace/lower) | Text | Converts a string to lowercase. |
| [regexp_match](/ace/regexp_match) | Text | Matches a string against a regular expression pattern. |
| [right](/ace/right) | Text | Returns the rightmost characters from a string. |
| [str_contains](/ace/str_contains) | Text | Checks if a string contains a specified substring. |
| [str_pos](/ace/str_pos) | Text | Returns the position of a substring within a string. |
| [str_replace](/ace/str_replace) | Text | Replaces occurrences of a substring within a string. |
| [str_split](/ace/str_split) | Text | Splits a string into an array based on a delimiter. |
| [upper](/ace/upper) | Text | Converts a string to uppercase. |
| [user_agent](/ace/user_agent) | Text | Parses user agent strings to extract browser and device information. |
| [over](/ace/over) | Window | Applies a window function over a partition of rows. |
| [row_number](/ace/row_number) | Window | Assigns a sequential row number to each row in a result set. |
