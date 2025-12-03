---
sidebar_position: 2   
title: floor_date
slug: /ace/floor_date
tags: [Date and Time]
---

Takes a date-time and rounds it down to the nearest date-time value of the specified time unit.

### Syntax

 ```yaml
floor_date(<date>, <unit>)
```
    
| Parameter   | Type | Description |
| ----------- | ---- | ----------- |     
| date | Date | The date value to process. |
| unit | Text | One of: MINUTE, HOUR, WEEK, DAY, MONTH, QUARTER, YEAR. |

### Return values
Date


## Usage

Rounds the date down to the first day of the month.


```yaml
floor_date(orders.processed_at, MONTH)
```


### Related functions      
* [year](/ace/year)
* [month](/ace/month)
* [quarter](/ace/quarter)
* [date](/ace/date)
