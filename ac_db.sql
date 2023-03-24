CREATE TABLE `materials` (
  `mid` int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
  `kind_of_materials` varchar(255) NOT NULL,
  `kind_of_test` varchar(255) NOT NULL,
  `Unit/Price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `rentals` (
  `rid` int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
  `kind_of_rentals` varchar(255) NOT NULL,
  `kind_of_test` varchar(255) NOT NULL,
  `Unit/Price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `materials` (`kind_of_materials`, `kind_of_test`, `Unit/Price`) VALUES
('Aggregate Subbase Course (200) QT', 'Grading', 350.00),
('Aggregate Subbase Course (200) QT', 'Liquid Limit', 290.00),
('Aggregate Subbase Course (200) QT', 'Plastic Limit', 210.00),
('Aggregate Subbase Course (200) QT', 'Abrasion', 720.00),
('Aggregate Subbase Course (200) QT', 'Wash Loss', 210.00),
('Aggregate Subbase Course (200) QT', 'Moisture Content', 110.00),
('Aggregate Subbase Course (200) CT', 'Grading', 350.00),
('Aggregate Subbase Course (200) CT', 'Liquid Limit', 290.00),
('Aggregate Subbase Course (200) CT', 'Plastic Limit', 210.00),
('Aggregate Subbase Course (200) CT', 'Abrasion', 720.00),
('Aggregate Subbase Course (200) CT', 'Wash Loss', 210.00),
('Aggregate Subbase Course (200) CT', 'Moisture Content', 110.00),
('Aggregate Subbase Course (200) CT', 'CBR', 2010.00),
('Aggregate Subbase Course (200) CT', 'Laboratory Compaction(modified)', 1120.00),
('Aggregate Surface Course (300) QT', 'Grading', 350.00),
('Aggregate Surface Course (300) QT', 'Liquid Limit', 290.00),
('Aggregate Surface Course (300) QT', 'Plastic Limit', 210.00),
('Aggregate Surface Course (300) QT', 'Abrasion', 720.00),
('Aggregate Surface Course (300) QT', 'Wash Loss', 210.00),
('Aggregate Surface Course (300) QT', 'Moisture Content', 110.00),
('Aggregate Surface Course (300) QT', '% Fractured Face', 210.00),
('Aggregate Surface Course (300) CT', 'Grading', 350.00),
('Aggregate Surface Course (300) CT', 'Liquid Limit', 290.00),
('Aggregate Surface Course (300) CT', 'Plastic Limit', 210.00),
('Aggregate Surface Course (300) CT', 'Abrasion', 720.00),
('Aggregate Surface Course (300) CT', 'Wash Loss', 210.00),
('Aggregate Surface Course (300) CT', 'Moisture Content', 110.00),
('Aggregate Surface Course (300) CT', '% Fractured Face', 210.00),
('Aggregate Surface Course (300) CT', 'CBR', 2010.00),
('Aggregate Surface Course (300) CT', 'Laboratory Compaction(modified)', 1120.00),
('GPC', 'Grading', 350.00),
('GPC', 'Liquid limit', 290.00),
('GPC', 'Plastic limit', 290.00),
('GPC', 'Compaction (Modified)', 1120.00),
('Embankment', 'Grading', 350.00),
('Embankment', 'Liquid limit', 290.00),
('Embankment', 'Plastic limit', 210.00),
('Embankment', 'Organic Content', 910.00),
('Embankment', 'Compaction', 1120.00),
('Embankment', 'Wash Loss', 210.00),
('Steel', 'Tensile Properties(H-Pile/Sheet Pile)', 720.00),
('Metal Beam End Piece(Fish Tail) & Metal Guardrail', 'Tensile Properties', 720.00),
('Metal Beam End Piece(Fish Tail) & Metal Guardrail', 'Thickness', 170.00),
('Metal Beam End Piece(Fish Tail) & Metal Guardrail', 'Weight of Coating', 500.00),
('Thickness Determination', 'Core Bore', 240.00),
('Thickness Determination', 'Rental', 1650.00),
('Asphalt Aggregates', 'Grading', 290.00),
('Asphalt Aggregates', 'Liquid limit & Plastic limit', 340.00),
('Asphalt Aggregates', 'Abrasion', 600.00),
('Asphalt Aggregates', 'Stripping', 500.00),
('Asphalt Aggregates', 'Bulk Specific Gravity', 200.00),
('Asphalt Aggregates', 'Fractured Face', 170.00),
('Coarse Aggregates', 'Grading', 350.00),
('Coarse Aggregates', 'Moisture Content', 170.00),
('Coarse Aggregates', 'Abrasion', 720.00),
('Coarse Aggregates', 'Specific Gravity & Absorption', 350.00),
('Coarse Aggregates', 'Unit Weight,Loose & Rodded', 260.00),
('Coarse Aggregates', 'Materials Finer than the no. 200 Sieve', 290.00),
('Fine Aggregates', 'Grading', 350.00),
('Fine Aggregates', 'Moisture Content', 170.00),
('Fine Aggregates', 'Material Finer than no. 200 sieve', 290.00),
('Fine Aggregates', 'Specific Gravity & Absorption', 350.00),
('Fine Aggregates', 'Unit Weight,Loose & Rodded', 260.00),
('Fine Aggregates', 'Organic Impurities', 420.00),
('Cement', 'Magnesium Oxide', 280.00),
('Cement', 'Sulfur Trioxide', 280.00),
('Cement', 'Loss Ignation', 270.00),
('Cement', 'Insoluble Residue', 280.00),
('Cement', 'Fineness', 170.00),
('Cement', 'Autoclave Expansion', 500.00),
('Cement', 'Time of Setting', 150.00),
('Cement', 'Compressive Strength', 720.00),
('Cement', 'Specific Gravity', 240.00),
('Cement', 'Air Content', 240.00),
('Cement', 'Normal Consistency', 170.00),
('Stone', 'Water Absorption and Moisture Content', 270.00),
('Boulders', 'Specific Gravity & Absorption', 350.00),
('PCCP', 'Flexural Strength', 210.00),
('Structural Concrete', 'Compressive Strength', 180.00),
('Reinforced Concrete Pipe 24', 'External Load Crushing Strength 24" and under ø', 900.00),
('Reinforced Concrete Pipe 24', 'Reinforcement Measurement', 170.00),
('Reinforced Concrete Pipe 24', 'Dimension Measurement', 170.00),
('Reinforced Concrete Pipe 24', 'Water Absorption', 350.00),
('Reinforced Concrete Pipe 30', 'External Load Crushing Strength 24" - 30" ø', 1140.00),
('Reinforced Concrete Pipe 30', 'Reinforcement Measurement', 170.00),
('Reinforced Concrete Pipe 30', 'Dimension Measurement', 170.00),
('Reinforced Concrete Pipe 30', 'Water Absorption', 350.00),
('Reinforced Concrete Pipe 42', 'External Load Crushing Strength 30" - 42" ø', 1500.00),
('Reinforced Concrete Pipe 42', 'Reinforcement Measurement', 170.00),
('Reinforced Concrete Pipe 42', 'Dimension Measurement', 170.00),
('Reinforced Concrete Pipe 42', 'Water Absorption', 350.00),
('Reinforced Concrete Pipe 60', 'External Load Crushing Strength 42" - 60" ø', 2460.00),
('Reinforced Concrete Pipe 60', 'Reinforcement Measurement', 170.00),
('Reinforced Concrete Pipe 60', 'Dimension Measurement', 170.00),
('Reinforced Concrete Pipe 60', 'Water Absorption', 350.00),
('Concrete Hollow Block','Flexural Strength', 270.00),
('Concrete Hollow Block','Water Absorption', 270.00),
('Concrete Hollow Block','Moisture Content', 270.00),
('Concrete Hollow Block','Water Absorption and Moisture Content', 270.00),
('Portland Cement','Magnesium Oxide', 280.00),
('Portland Cement','Sulfur Trioxide', 280.00),
('Portland Cement','Loss on Ignition', 270.00),
('Portland Cement','Fineness', 170.00),
('Portland Cement','Autoclave Expansion', 500.00),
('Portland Cement','Air Content', 240.00),
('Portland Cement','Time Setting', 150.00),
('Portland Cement','Compressive Strength', 720.00),
('Portland Cement','Specific Gravity', 240.00),
('Portland Cement','Normal Consistency', 170.00),
('Portland Cement','Insoluble Residue', 280.00),
('Reinforced Steel Bars Plain', 'Tensile Properties', 290.00),
('Reinforced Steel Bars Plain', 'Bending Properties', 180.00),
('Reinforced Steel Bars Plain', 'Variation in Mass', 170.00),
('Reinforced Steel Bars Plain', 'Phosphorous', 500.00),
('Reinforced Steel Bars Deformed', 'Tensile Properties', 290.00),
('Reinforced Steel Bars Deformed', 'Bending Properties', 180.00),
('Reinforced Steel Bars Deformed', 'Variation in Mass', 170.00),
('Reinforced Steel Bars Deformed', 'Deformation Measurement', 180.00),
('Reinforced Steel Bars Deformed', 'Phosphorous', 500.00),
('Structural Steel & Guardrail', 'Tensile Properties', 290.00),
('Structural Steel & Guardrail', 'Zinc Coating', 350.00),
('Reflectorized Traffic Paint Type I-W', 'Type I (White)', 4830.00),
('Reflectorized Traffic Paint Type I-Y', 'Type I (Yellow)', 5330.00),
('Reflectorized Traffic Paint Type II-W', 'Type II (White)', 3880.00),
('Reflectorized Traffic Paint Type II-Y', 'Type II (Yellow)', 4350.00),
('Thermoplastic Paint', 'Specific Gravity', 410.00),
('Thermoplastic Paint', 'Softening Point', 510.00),
('Thermoplastic Paint', 'Drying Time', 160.00),
('Thermoplastic Paint', 'Vehicle Binder', 2330.00),
('Thermoplastic Paint', 'Glass Beads Content', 810.00),
('Thermoplastic Paint', 'Glass Beads Grading', 180.00),
('Asphalt Cement', 'Specific Gravity', 170.00),
('Asphalt Cement', 'Loss on Heating', 270.00),
('Asphalt Cement', 'Solubility', 350.00),
('Asphalt Cement', 'Spot Test', 360.00),
('Asphalt Cement', 'Flash Point', 270.00),
('Asphalt Cement', 'Penetration(2)', 480.00),
('Asphalt Cement', 'Ductility(2)', 990.00),
('Asphalt Sealant', 'Penetration', 260.00),
('Asphalt Sealant', 'Flow', 500.00),
('Asphalt Sealant', 'Safe Heating Temperature', 350.00),
('Asphalt Sealant', 'Pour Point Temperature', 350.00),
('Emulsified Asphalt', 'Viscosity', 350.00),
('Emulsified Asphalt', 'Distillation', 660.00),
('Emulsified Asphalt', 'Cement Mixing', 270.00),
('Emulsified Asphalt', 'Sieve Test', 270.00),
('Emulsified Asphalt', 'Specific Gravity', 170.00),
('Emulsified Asphalt', 'Storage Stability', 270.00),
('Emulsified Asphalt', 'Solubility', 350.00),
('Emulsified Asphalt', 'Ductility', 500.00),
('Emulsified Asphalt', 'Penetration', 240.00),
('Cutback Asphalt', 'Specific Gravity', 170.00),
('Cutback Asphalt', 'Distillation', 800.00),
('Cutback Asphalt', 'Viscosity', 350.00),
('Cutback Asphalt', 'Spot Test', 360.00),
('Cutback Asphalt', 'Penetration', 240.00),
('Cutback Asphalt', 'Ductility', 500.00),
('Cutback Asphalt', 'Solubility', 350.00),
('Cutback Asphalt', 'Flashpoint', 270.00),
('Joint Filler', 'Penetration', 260.00),
('Joint Filler', 'Flow', 500.00),
('Joint Filler', 'Pour Point', 350.00),
('Joint Filler', 'Safe Heating', 350.00),
('Preformed Joint Filler', 'Absorption', 510.00),
('Preformed Joint Filler', 'Compression and Recovery', 500.00),
('Preformed Joint Filler', 'Thickness', 210.00),
('Preformed Joint Filler', 'Density', 260.00),
('Bituminous Mix', 'Extraction', 470.00),
('Bituminous Mix', 'Grading', 350.00),
('Bituminous Mix', 'Marshall Stability/Immersion Compression', 470.00),
('Bituminous Mix', 'Density and Voids of Compacted Mixtures', 260.00);

INSERT INTO `rentals` (`kind_of_rentals`, `kind_of_test`, `Unit/Price`) VALUES
('Preformed Joint Filler', 'Absorption', 510.00),
('Preformed Joint Filler', 'Compression and Recovery', 500.00),
('Preformed Joint Filler', 'Thickness', 210.00),
('Preformed Joint Filler', 'Density', 260.00),
('Bituminous Mix', 'Extraction', 470.00),
('Bituminous Mix', 'Grading', 350.00),
('Bituminous Mix', 'Marshall Stability/Immersion Compression', 470.00),
('Bituminous Mix', 'Density and Voids of Compacted Mixtures', 260.00),
('Coring Machine Rental', 'Rental', 1650.00);