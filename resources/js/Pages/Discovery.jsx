import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head, Link } from '@inertiajs/react';
import '../../css/elipsis.css';

export default function Discovery({ auth, forms }) {
    return (
        <AuthenticatedLayout
            user={auth.user}
            header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Discovery</h2>}
        >
            <Head title="Discovery" />

            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div className="overflow-hidden">
                        <div className="p-6 text-gray-900 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-4">
                            {forms.map(form => (
                                <div key={form.id} className="bg-white border rounded-md shadow-sm hover:shadow-md duration-300 p-4">
                                    <h3 className="text-lg font-semibold title">{form.title}</h3>
                                    <div className="description-container">
                                        <p>{form.description}</p>
                                    </div>
                                    <div>
                                        <p className='text-sm'>Posted by: {form.creator.name}</p>
                                    </div>
                                </div>
                            ))}
                        </div>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
