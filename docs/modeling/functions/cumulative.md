---
sidebar_position: 2   
title: cumulative
slug: /ace/cumulative
tags: [Aggregation]
---

Calculates a cumulative sum or other cumulative aggregation.

### Syntax

 ```yaml
cumulative(<table>, <expr>, <sort>)
```
    
| Parameter   | Type | Description |
| ----------- | ---- | ----------- |     
| table | Table | The table to operate on. |
| expr | any | The expression to evaluate. |
| sort | Array | The Sort value. |

### Return values
Depends on input arguments.


## Usage

Calculates a cumulative sum of order total prices.


```yaml
cumulative(sum(orders.total_price))
```


### Related functions      
* [sum](/ace/sum)
* [sum_x](/ace/sum_x)
* [over](/ace/over)
