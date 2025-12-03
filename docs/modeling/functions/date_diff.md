---
sidebar_position: 2   
title: date_diff
slug: /ace/date_diff
tags: [Date and Time]
---

Returns the number of units (unit specified in Interval) between the input two dates.

### Syntax

 ```yaml
date_diff(<date1>, <date2>, <interval>)
```
    
| Parameter   | Type | Description |
| ----------- | ---- | ----------- |     
| date1 | Date | A date in datetime format that represents the start date. |
| date2 | Date | A date in datetime format that represents the end date. |
| interval | Text | One of: MINUTE, HOUR, DAY, WEEK, MONTH, QUARTER, YEAR. |

### Return values
Integer


## Usage

Calculates the number of days between the order creation date and today.


```yaml
date_diff(orders.created_at, now(), DAY)
```


### Related functions      
* [date_add](/ace/date_add)
* [date](/ace/date)
* [date_value](/ace/date_value)
* [now](/ace/now)
