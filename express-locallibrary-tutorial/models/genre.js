var mongoose = require('mongoose');

var Schema = mongoose.Schema;

var GenreSchema = new Schema(
    {
    //reference to the associated book
        name: {type: String, required: true, max: 100}
    }
);

// Virtual for bookinstance's URL
GenreSchema
    .virtual('url')
    .get(function () {
  return '/catalog/genre/' + this._id;
});

//Export model
module.exports = mongoose.model('BookInstance', BookInstanceSchema);
