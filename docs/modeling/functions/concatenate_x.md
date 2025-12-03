---
sidebar_position: 2   
title: concatenate_x
slug: /ace/concatenate_x
tags: [Aggregation]
---

Concatenates multiple text values into a single string.

### Syntax

 ```yaml
concatenate_x(<table>, <expr>)
```
    
| Parameter   | Type | Description |
| ----------- | ---- | ----------- |     
| table | Table | The table to operate on. |
| expr | any | The expression to evaluate. |

### Return values
Text


## Usage

Concatenates all order tags into a single string.


```yaml
concatenate_x(orders.tags)
```


### Related functions      
* [str_split](/ace/str_split)
* [str_contains](/ace/str_contains)
