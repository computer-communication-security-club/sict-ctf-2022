const crypto = require('crypto');


const state = { id: 0 };
const notes = new Map();
const add = (note) => {
    const id = crypto
        .createHash('sha256')
        .update(state.id.toString())
        .digest('hex');

    state.id += 1;

    notes.set(id, note);
    return id;
}

add(process.env.FLAG ?? 'sictCTF{Ug0tTh1sCh@l13nge}');

const sanitize = (text) => text.replace('<', '&lt;');

