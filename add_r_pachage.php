rm(list = ls()) 
options()$repos 
options()$BioC_mirror
options(BioC_mirror="https://mirrors.ustc.edu.cn/bioc/")
options("repos" = c(CRAN="https://mirrors.tuna.tsinghua.edu.cn/CRAN/"))
options()$repos 
options()$BioC_mirror
# https://bioconductor.org/packages/release/bioc/html/GEOquery.html
if (!requireNamespace("BiocManager", quietly = TRUE))
  install.packages("BiocManager")
BiocManager::install("KEGG.db",ask = F,update = F)
