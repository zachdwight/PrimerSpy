# PrimerSpy
Automated small amplicon assay design for PCR/HRM utilizing PHP and Python backend service.

High-resolution melting is a straightforward technique
for genotyping that relies on thermodynamic differences of
PCR products and distinguishable melting profiles. Often,
researchers use a variety of sources to design, validate,
and assess PCR primers without the context of designing
the final PCR product. To help aid researchers in designing
assays with minimal input, we developed web accessible
software, uDesign (now PrimerSPY), to streamline the small amplicon design
process. uDesign previously automated sequence retrieval, primer
design, melting curve predictions for all products, and
hairpin design if nearest-neighbor symmetry exists.

DEFAULT
![image](https://github.com/user-attachments/assets/c82405b7-de4d-476c-9bbd-c007c99d9c19)

Over time, we streamlined the process further and introducted PrimerSPY to replace uDesign.  We removed some of the automated NCBI seq calls.

AFTER EXECUTION: Two primers with TMs are provided to the user surrounding target region.
![image](https://github.com/user-attachments/assets/57da1b9a-6b72-4dae-bbdf-e9858a761b05)

The original uDesign poster can be found here:

https://dna-utah.org/Posters/amp2013/uDesign_Poster_AMP_ZLD_Update.pdf
