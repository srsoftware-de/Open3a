<?php echo "This is a database-file."; /*
MySQL&%%%&MSSQL
varchar(5000)&%%%&varchar(5000)
CREATE TABLE `Auftrag` (%n%l%  `AuftragID` int(10) NOT NULL AUTO_INCREMENT,%n%l%  `AdresseID` int(10) NOT NULL DEFAULT \'0\',%n%l%  `fixed` int(1) NOT NULL DEFAULT \'0\',%n%l%  `bezahlt` int(1) NOT NULL DEFAULT \'0\',%n%l%  `bemerkung` text NOT NULL,%n%l%  `bezahltAm` int(16) NOT NULL DEFAULT \'0\',%n%l%  `auftragDatum` int(17) NOT NULL DEFAULT \'0\',%n%l%  `kundennummer` varchar(30) NOT NULL DEFAULT \'\',%n%l%  `UserID` int(10) NOT NULL DEFAULT \'0\',%n%l%  `UStIdNr` varchar(20) NOT NULL DEFAULT \'\',%n%l%  `status` varchar(20) NOT NULL,%n%l%  `ProjektID` int(10) NOT NULL,%n%l%  `lieferantennummer` varchar(30) NOT NULL,%n%l%  `AuftragVorlage` varchar(50) NOT NULL,%n%l%  `AuftragStammdatenID` int(10) NOT NULL,%n%l%  `AuftragAdresseNiederlassungID` int(10) NOT NULL,%n%l%  `AuftragAdresseNiederlassungData` text NOT NULL,%n%l%  PRIMARY KEY (`AuftragID`)%n%l%) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT=\'openFiBu_0.1;\';                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      &%%%&CREATE TABLE [Auftrag] (%n%l%  [AuftragID] int NOT NULL AUTO_INCREMENT,%n%l%  [AdresseID] int NOT NULL DEFAULT \'0\',%n%l%  [fixed] int NOT NULL DEFAULT \'0\',%n%l%  [bezahlt] int NOT NULL DEFAULT \'0\',%n%l%  [bemerkung] text NOT NULL,%n%l%  [bezahltAm] int NOT NULL DEFAULT \'0\',%n%l%  [auftragDatum] int NOT NULL DEFAULT \'0\',%n%l%  [kundennummer] varchar(30) NOT NULL DEFAULT \'\',%n%l%  [UserID] int NOT NULL DEFAULT \'0\',%n%l%  [UStIdNr] varchar(20) NOT NULL DEFAULT \'\',%n%l%  [status] varchar(20) NOT NULL,%n%l%  [ProjektID] int NOT NULL,%n%l%  [lieferantennummer] varchar(30) NOT NULL,%n%l%  [AuftragVorlage] varchar(50) NOT NULL,%n%l%  [AuftragStammdatenID] int NOT NULL,%n%l%  [AuftragAdresseNiederlassungID] int NOT NULL,%n%l%  [AuftragAdresseNiederlassungData] text NOT NULL,%n%l%  PRIMARY KEY ([AuftragID])%n%l%) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT=\'openFiBu_0.1;\';                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            %%&&&
CREATE TABLE `GRLBM` (%n%l%  `GRLBMID` int(10) NOT NULL AUTO_INCREMENT,%n%l%  `AuftragID` int(10) NOT NULL DEFAULT \'0\',%n%l%  `datum` int(17) NOT NULL DEFAULT \'0\',%n%l%  `isR` tinyint(1) NOT NULL DEFAULT \'0\',%n%l%  `isL` tinyint(1) NOT NULL DEFAULT \'0\',%n%l%  `isG` tinyint(1) NOT NULL DEFAULT \'0\',%n%l%  `isB` tinyint(1) NOT NULL DEFAULT \'0\',%n%l%  `isM` tinyint(1) NOT NULL DEFAULT \'0\',%n%l%  `isA` tinyint(1) NOT NULL DEFAULT \'0\',%n%l%  `isWhat` varchar(7) NOT NULL DEFAULT \'\',%n%l%  `nummer` varchar(50) NOT NULL DEFAULT \'\',%n%l%  `textbausteinOben` text NOT NULL,%n%l%  `textbausteinUnten` text NOT NULL,%n%l%  `zahlungsbedingungen` text NOT NULL,%n%l%  `StammdatenID` int(10) NOT NULL DEFAULT \'0\',%n%l%  `lieferDatum` int(17) NOT NULL DEFAULT \'0\',%n%l%  `rabatt` decimal(15,2) NOT NULL DEFAULT \'0.00\',%n%l%  `leasingrate` decimal(15,2) NOT NULL DEFAULT \'0.00\',%n%l%  `rabattInW` decimal(15,2) NOT NULL DEFAULT \'0.00\',%n%l%  `isPrinted` tinyint(1) NOT NULL DEFAULT \'0\',%n%l%  `isPayed` tinyint(1) NOT NULL DEFAULT \'0\',%n%l%  `payedWithSkonto` decimal(5,2) NOT NULL DEFAULT \'0.00\',%n%l%  `GRLBMpayedDate` int(15) NOT NULL DEFAULT \'0\',%n%l%  `versandkosten` decimal(8,3) NOT NULL,%n%l%  `versandkostenMwSt` decimal(5,2) NOT NULL,%n%l%  `lieferAdresseID` int(10) NOT NULL,%n%l%  `prefix` varchar(10) NOT NULL,%n%l%  `textbausteinObenID` int(10) NOT NULL,%n%l%  `textbausteinUntenID` int(10) NOT NULL,%n%l%  `zahlungsbedingungenID` int(10) NOT NULL,%n%l%  `isAbschlussrechnung` tinyint(1) NOT NULL,%n%l%  `dateOfCreation` int(15) NOT NULL,%n%l%  `nettobetrag` decimal(10,3) NOT NULL,%n%l%  `bruttobetrag` decimal(10,3) NOT NULL,%n%l%  `steuern` decimal(10,3) NOT NULL,%n%l%  `printAB` tinyint(1) NOT NULL,%n%l%  `GRLBMpayedBemerkung` text NOT NULL,%n%l%  `GRLBMCustomField1` varchar(100) NOT NULL,%n%l%  `GRLBMCustomField2` varchar(100) NOT NULL,%n%l%  `GRLBMCustomField3` varchar(100) NOT NULL,%n%l%  `isEMailed` tinyint(1) NOT NULL,%n%l%  `GRLBMpayedVia` varchar(30) NOT NULL,%n%l%  `isAbschlagsrechnung` tinyint(1) NOT NULL,%n%l%  `gebuehren` decimal(10,3) NOT NULL,%n%l%  `isEMailedTime` int(15) NOT NULL,%n%l%  `ek1betrag` decimal(10,3) NOT NULL,%n%l%  `GRLBMReferenz` varchar(30) NOT NULL,%n%l%  `GRLBMReferenznummer` varchar(20) NOT NULL,%n%l%  `GRLBMAnsprechpartnerID` int(10) NOT NULL,%n%l%  `isPixelLetteredTime` int(15) NOT NULL,%n%l%  `isPrintedTime` int(15) NOT NULL,%n%l%  `isPrintedCopy` tinyint(1) NOT NULL,%n%l%  `isPrintedCopyTime` int(15) NOT NULL,%n%l%  `GRLBMWaehrungFaktor` float NOT NULL,%n%l%  `lieferDatumText` varchar(150) NOT NULL,%n%l%  `GRLBMCustomField11` varchar(100) NOT NULL,%n%l%  `GRLBMCustomField12` varchar(100) NOT NULL,%n%l%  `GRLBMCustomField13` varchar(100) NOT NULL,%n%l%  `GRLBMCreatedByUsername` varchar(50) NOT NULL,%n%l%  `GRLBMCreatedByUserID` int(10) NOT NULL,%n%l%  PRIMARY KEY (`GRLBMID`)%n%l%) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT=\'openFiBu_0.1;\';                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       &%%%&CREATE TABLE [GRLBM] (%n%l%  [GRLBMID] int NOT NULL AUTO_INCREMENT,%n%l%  [AuftragID] int NOT NULL DEFAULT \'0\',%n%l%  [datum] int NOT NULL DEFAULT \'0\',%n%l%  [isR] tinyint NOT NULL DEFAULT \'0\',%n%l%  [isL] tinyint NOT NULL DEFAULT \'0\',%n%l%  [isG] tinyint NOT NULL DEFAULT \'0\',%n%l%  [isB] tinyint NOT NULL DEFAULT \'0\',%n%l%  [isM] tinyint NOT NULL DEFAULT \'0\',%n%l%  [isA] tinyint NOT NULL DEFAULT \'0\',%n%l%  [isWhat] varchar(7) NOT NULL DEFAULT \'\',%n%l%  [nummer] varchar(50) NOT NULL DEFAULT \'\',%n%l%  [textbausteinOben] text NOT NULL,%n%l%  [textbausteinUnten] text NOT NULL,%n%l%  [zahlungsbedingungen] text NOT NULL,%n%l%  [StammdatenID] int NOT NULL DEFAULT \'0\',%n%l%  [lieferDatum] int NOT NULL DEFAULT \'0\',%n%l%  [rabatt] decimal(15,2) NOT NULL DEFAULT \'0.00\',%n%l%  [leasingrate] decimal(15,2) NOT NULL DEFAULT \'0.00\',%n%l%  [rabattInW] decimal(15,2) NOT NULL DEFAULT \'0.00\',%n%l%  [isPrinted] tinyint NOT NULL DEFAULT \'0\',%n%l%  [isPayed] tinyint NOT NULL DEFAULT \'0\',%n%l%  [payedWithSkonto] decimal(5,2) NOT NULL DEFAULT \'0.00\',%n%l%  [GRLBMpayedDate] int NOT NULL DEFAULT \'0\',%n%l%  [versandkosten] decimal(8,3) NOT NULL,%n%l%  [versandkostenMwSt] decimal(5,2) NOT NULL,%n%l%  [lieferAdresseID] int NOT NULL,%n%l%  [prefix] varchar(10) NOT NULL,%n%l%  [textbausteinObenID] int NOT NULL,%n%l%  [textbausteinUntenID] int NOT NULL,%n%l%  [zahlungsbedingungenID] int NOT NULL,%n%l%  [isAbschlussrechnung] tinyint NOT NULL,%n%l%  [dateOfCreation] int NOT NULL,%n%l%  [nettobetrag] decimal(10,3) NOT NULL,%n%l%  [bruttobetrag] decimal(10,3) NOT NULL,%n%l%  [steuern] decimal(10,3) NOT NULL,%n%l%  [printAB] tinyint NOT NULL,%n%l%  [GRLBMpayedBemerkung] text NOT NULL,%n%l%  [GRLBMCustomField1] varchar(100) NOT NULL,%n%l%  [GRLBMCustomField2] varchar(100) NOT NULL,%n%l%  [GRLBMCustomField3] varchar(100) NOT NULL,%n%l%  [isEMailed] tinyint NOT NULL,%n%l%  [GRLBMpayedVia] varchar(30) NOT NULL,%n%l%  [isAbschlagsrechnung] tinyint NOT NULL,%n%l%  [gebuehren] decimal(10,3) NOT NULL,%n%l%  [isEMailedTime] int NOT NULL,%n%l%  [ek1betrag] decimal(10,3) NOT NULL,%n%l%  [GRLBMReferenz] varchar(30) NOT NULL,%n%l%  [GRLBMReferenznummer] varchar(20) NOT NULL,%n%l%  [GRLBMAnsprechpartnerID] int NOT NULL,%n%l%  [isPixelLetteredTime] int NOT NULL,%n%l%  [isPrintedTime] int NOT NULL,%n%l%  [isPrintedCopy] tinyint NOT NULL,%n%l%  [isPrintedCopyTime] int NOT NULL,%n%l%  [GRLBMWaehrungFaktor] float NOT NULL,%n%l%  [lieferDatumText] varchar(150) NOT NULL,%n%l%  [GRLBMCustomField11] varchar(100) NOT NULL,%n%l%  [GRLBMCustomField12] varchar(100) NOT NULL,%n%l%  [GRLBMCustomField13] varchar(100) NOT NULL,%n%l%  [GRLBMCreatedByUsername] varchar(50) NOT NULL,%n%l%  [GRLBMCreatedByUserID] int NOT NULL,%n%l%  PRIMARY KEY ([GRLBMID])%n%l%) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT=\'openFiBu_0.1;\';                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  %%&&&
CREATE TABLE `Posten` (%n%l%  `PostenID` int(10) NOT NULL AUTO_INCREMENT,%n%l%  `name` varchar(200) NOT NULL DEFAULT \'0\',%n%l%  `gebinde` varchar(30) NOT NULL DEFAULT \'\',%n%l%  `GRLBMID` int(10) NOT NULL DEFAULT \'0\',%n%l%  `preis` decimal(10,3) NOT NULL DEFAULT \'0.000\',%n%l%  `menge` decimal(10,3) NOT NULL DEFAULT \'0.000\',%n%l%  `mwst` decimal(4,2) NOT NULL DEFAULT \'0.00\',%n%l%  `artikelnummer` varchar(50) NOT NULL DEFAULT \'\',%n%l%  `bemerkung` text NOT NULL,%n%l%  `EK1` decimal(10,2) NOT NULL DEFAULT \'0.00\',%n%l%  `EK2` decimal(10,2) NOT NULL DEFAULT \'0.00\',%n%l%  `beschreibung` text NOT NULL,%n%l%  `oldArtikelID` int(10) NOT NULL DEFAULT \'0\',%n%l%  `isBrutto` tinyint(1) NOT NULL,%n%l%  `bruttopreis` decimal(10,3) NOT NULL,%n%l%  `createArtikel` tinyint(1) NOT NULL DEFAULT \'0\',%n%l%  `sachkonto` int(10) NOT NULL,%n%l%  `menge2` decimal(10,2) NOT NULL,%n%l%  `VarianteArtikelID` int(10) NOT NULL,%n%l%  `bild` longblob NOT NULL,%n%l%  `erloeskonto` int(10) NOT NULL,%n%l%  `PostenUsedSerials` text NOT NULL,%n%l%  `PostenLieferantID` int(10) NOT NULL,%n%l%  PRIMARY KEY (`PostenID`)%n%l%) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT=\'openFiBu_0.1;\';                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        &%%%&CREATE TABLE [Posten] (%n%l%  [PostenID] int NOT NULL AUTO_INCREMENT,%n%l%  [name] varchar(200) NOT NULL DEFAULT \'0\',%n%l%  [gebinde] varchar(30) NOT NULL DEFAULT \'\',%n%l%  [GRLBMID] int NOT NULL DEFAULT \'0\',%n%l%  [preis] decimal(10,3) NOT NULL DEFAULT \'0.000\',%n%l%  [menge] decimal(10,3) NOT NULL DEFAULT \'0.000\',%n%l%  [mwst] decimal(4,2) NOT NULL DEFAULT \'0.00\',%n%l%  [artikelnummer] varchar(50) NOT NULL DEFAULT \'\',%n%l%  [bemerkung] text NOT NULL,%n%l%  [EK1] decimal(10,2) NOT NULL DEFAULT \'0.00\',%n%l%  [EK2] decimal(10,2) NOT NULL DEFAULT \'0.00\',%n%l%  [beschreibung] text NOT NULL,%n%l%  [oldArtikelID] int NOT NULL DEFAULT \'0\',%n%l%  [isBrutto] tinyint NOT NULL,%n%l%  [bruttopreis] decimal(10,3) NOT NULL,%n%l%  [createArtikel] tinyint NOT NULL DEFAULT \'0\',%n%l%  [sachkonto] int NOT NULL,%n%l%  [menge2] decimal(10,2) NOT NULL,%n%l%  [VarianteArtikelID] int NOT NULL,%n%l%  [bild] varbinary(max) NOT NULL,%n%l%  [erloeskonto] int NOT NULL,%n%l%  [PostenUsedSerials] text NOT NULL,%n%l%  [PostenLieferantID] int NOT NULL,%n%l%  PRIMARY KEY ([PostenID])%n%l%) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT=\'openFiBu_0.1;\';                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    %%&&&
*/ ?>