---
sidebar_position: 2   
title: generate_series
slug: /ace/generate_series
tags: [Table manipulation]
---

Generates a series of values between a start and end value.

### Syntax

 ```yaml
generate_series(<startValue>, <endValue>, <incrementValue>)
```
    
| Parameter   | Type | Description |
| ----------- | ---- | ----------- |     
| startValue | Integer | The starting value of the series. |
| endValue | Integer | The ending value of the series. |
| incrementValue | Integer | The increment step for the series. |

### Return values
Table


## Usage

Generates a series of numbers from 1 to 10 with increment of 1.


```yaml
generate_series(1, 10, 1)
```


### Related functions      
* [date_range](/ace/date_range)
* [fill_inventory_gaps](/ace/fill_inventory_gaps)
