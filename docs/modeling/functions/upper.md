---
sidebar_position: 2   
title: upper
slug: /ace/upper
tags: [Text]
---

Converts a string to uppercase.

### Syntax

 ```yaml
upper(<text>)
```
    
| Parameter   | Type | Description |
| ----------- | ---- | ----------- |     
| text | Text | The text value to process. |

### Return values
Text


## Usage

Converts customer name to uppercase.


```yaml
upper(orders.customer_name)
```


### Related functions      
* [lower](/ace/lower)
* [init_cap](/ace/init_cap)
* [str_replace](/ace/str_replace)
