--
--
--
--
--
DROP TABLE IF EXISTS 'Trail Segment';
DROP TABLE IF EXISTS Segment;
DROP TABLE IF EXISTS Trail;
DROP TABLE IF EXISTS Profile;

CREATE TABLE Profile (
	profileId INT UNISIGNED AUTO_INCREMENT NOT NULL,
	profileEmail VARCHAR(128) NOT NULL
	UNIQUE(ProfileEmail)
	PRIMARY KEY(ProfileId)
)
CREATE TABLE Trail (
	trailId INT UNSIGNED AUTO_INCREMENT NOT NULL
	trailProfileId INT UNSIGNED NOT NULL
	trailStart INT AUTO_INCREMENT NOT NULL DATETIME NOT NULL
	trailEnd INT AUTO_INCREMENT NOT NULL DATETIME NOT NULL
	INDEX(trailProfileId)
	FOREIGN KEY(trailProfileId)REFERENCES profile(profileId)
	PRIMARY KEY(trailId)
);
CREATE TABLE Segment (
	segmentId INT UNSIGNED AUTO_INCREMENT NOT NULL
	segmentProfileId INT UNSIGNED NOT NULL
	segmentStart INT AUTO_INCREMENT NOT NULL DATETIME NOT NULL
	segementEnd INT AUTO_INCREMENT NOT NULL DATETIME NOT NULL
	INDEX(segmentProfileId)
	FOREIGN KEY(segmentProfileId) REFERENCES profile(profileId)
);
CREATE TABLE 'Trail Segment' (
	trailSegmentTrailId INT UNSIGNED NOT NULL DATETIME NOT NULL
	trailSegmentSegmentId INT UNSIGNED NOT NULL DATETIME NOT NULL
	INDEX(trailSegmentProfileId)
	INDEX(trailSegmentTrailId)
	INDEX(trailSegmentSegmentId)
	--
	--index the foreign key
	--
	FOREIGN KEY(trailSegmentTrailId) REFERENCES trail(trailId)
	FOREIGN KEY(trailSegmentSegmentId) REFERENCES segment(segmentId)
	--
	PRIMARY KEY(trailSegmentTrailId, trailSegmentSegmentId)
);