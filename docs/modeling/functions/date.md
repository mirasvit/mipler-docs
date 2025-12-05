---
sidebar_position: 2   
title: date
slug: /ace/date
tags: [Date and Time]
---

Converts a year, month, and day into a date.

### Syntax

 ```yaml
date(<date>)
```
    
| Parameter   | Type | Description |
| ----------- | ---- | ----------- |     
| date | Date | The date to strip time part. |

### Return values
Date


## Usage

Creates a date value from year (1922), month (7), and day (20).


```yaml
date(1922, 7, 20)
```


Strips the time part from the order creation datetime, keeping only the date.


```yaml
date(orders.created_at)
```


### Related functions      
* [date_add](/ace/date_add)
* [date_diff](/ace/date_diff)
* [now](/ace/now)
* [date_value](/ace/date_value)
* [format](/ace/format)
