# Aoe_SuffixFix

This is a fix for catelog and product url suffix handling in Magento CE 1.8.0.0-alpha1 and Magento EE 1.13

It is not possible to add a leading '.' in System > Configuration > Catalog > Catalog> Search Engine Optimizations > Product URL Suffix and Category URL Suffix.

A field comment says the '.' before the suffix will be added automatically. But this is not happening and results in broken urls that look like this one:

    http://www.example.de/category./producthtml

instead of

    http://www.example.de/category/product.html

This module implements an easy fix by rewriting the two helpers managing the suffixes.