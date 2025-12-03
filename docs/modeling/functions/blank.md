---
sidebar_position: 2   
title: blank
slug: /ace/blank
tags: []
---

Returns a blank (null) value.

### Syntax

 ```yaml
blank()
```
    
### Return values
Null


## Usage

Returns blank if order notes are empty, otherwise returns the notes.


```yaml
if(is_blank(orders.notes), blank(), orders.notes)
```


### Related functions      
* [not](/ace/not)
* [is_blank](/ace/is_blank)
* [is_empty](/ace/is_empty)
* [if](/ace/if)
