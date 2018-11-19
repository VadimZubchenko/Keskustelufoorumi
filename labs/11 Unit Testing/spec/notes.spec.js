describe('notes module', function () {

	beforeEach(function() {
		notes.clear();
		notes.add('first note');
		notes.add('second note');
		notes.add('third note');
		notes.add('fourth note');
		notes.add('fifth note');
	});
	describe('adding a note', function() {
		it('should be able to add a new note', function () {
			expect(notes.add('sixth note')).toBe(true);
			expect(notes.count()).toBe(6);
			//pending();
		});
		it('should ignore blank notes', function () {
			expect(notes.add('')).toBe(false);
			expect(notes.count()).toBe(5);
			//pending();
		});
		it('should ignore notes containing only whitespace', function() {
			expect(notes.add('   ')).toBe(false);
			expect(notes.count()).toBe(5);
			//pending();
		});

		it('should require a string parameter', function() {
			expect(notes.add()).toBe(false);
			expect(notes.count()).toBe(5);
			//pending();
		});
	});
	describe('deleting a note', function() {

		it('should be able to delete the first index', function() {
			expect(notes.remove(0)).toBe(true);
			expect(notes.count()).toBe(4);
			//pending();
		});

		it('should be able to delete the last index', function() {
			expect(notes.remove(notes.count() - 1)).toBe(true);
			expect(notes.count()).toBe(4);
			//pending();
		});
		it('should return false if index is out of range', function() {
			expect(notes.remove(notes.count() + 1)).toBe(false);
			expect(notes.count()).toBe(5);
			//pending();
		});

		it('should return false if the parameter is missing', function() {
			expect(notes.remove()).toBe(false);
			expect(notes.count()).toBe(5);
			//pending();
		});
	});
	describe('find a note', function() {

		it('should be able to search for ‘note’ ', function() {
			expect(notes.find('note').length).toBe(5);

			//pending();
		});

		it('should be able to search for ‘Note’', function() {
			expect(notes.find('Note').length).toBe(5);
			//pending();
		});
		it('should be able to search for ‘th’', function() {
			expect(notes.find('th').length).toBe(3);
			//pending();
		});

		it('should be able to search for ‘four’', function() {
			expect(notes.find('four').length).toBe(1);
			//pending();
		});
		it('should be able to search for ‘six’', function() {
			expect(notes.find('six')).toBe(false);
			//pending();
		});
		it('should be able search for a blank string', function() {
			expect(notes.find('')).toBe(false);
			//pending();
		});
		it('should be able search without passing a parameter', function() {
			expect(notes.find()).toBe(false);
			//pending();
		});

	});

});
