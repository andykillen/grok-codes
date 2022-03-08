
export async function get(req, res, next) {
var text = 
`User-agent: *
Allow: *`;
res.setHeader('Content-Type', 'text/plain');
res.end(text);
}