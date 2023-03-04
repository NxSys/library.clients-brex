# Configuration file for the Sphinx documentation builder.
#
# For the full list of built-in configuration values, see the documentation:
# https://www.sphinx-doc.org/en/master/usage/configuration.html

# -- Project information -----------------------------------------------------
# https://www.sphinx-doc.org/en/master/usage/configuration.html#project-information

project = 'Brex SDK for PHP'
copyright = '2023, Nexus Systems, Inc.'
author = 'ONX Group <onx@nxs.systems>'
release = 'alpha'

# -- General configuration ---------------------------------------------------
# https://www.sphinx-doc.org/en/master/usage/configuration.html#general-configuration

extensions = ['sphinx.ext.autodoc']

templates_path = ['_templates']
exclude_patterns = []

numfig = True

# -- Options for HTML output -------------------------------------------------
# https://www.sphinx-doc.org/en/master/usage/configuration.html#options-for-html-output

html_theme = 'pyramid'
html_static_path = ['_static']


import re

def process_docstring(app, what, name, obj, options, lines):
    spaces_pat = re.compile(r"( {8})")
    ll = []
    for l in lines:
        ll.append(spaces_pat.sub("    ",l))
    lines[:] = ll

def setup(app):
    app.connect('autodoc-process-docstring', process_docstring)